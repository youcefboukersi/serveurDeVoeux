<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SRVDV\ServerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;
use FOS\UserBundle\Model\UserInterface;
use SRVDV\ServerBundle\Entity\User;

/**
 * Description of CreateUserCommand
 *
 * @author josef
 */
class ImportCommand extends ContainerAwareCommand {

  protected function configure() {
    // Name and description for app/console command
    $this
          ->setName('import:csv')
          ->setDescription('Import users from CSV file');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    // Showing when the script is launched
    $now = new \DateTime();
    $output->writeln('<comment>Start : ' . $now->format('d-m-Y G:i:s') . ' ---</comment>');

    // Importing CSV on DB via Doctrine ORM
    $this->import($input, $output);

    // Showing when the script is over
    $now = new \DateTime();
    $output->writeln('<comment>End : ' . $now->format('d-m-Y G:i:s') . ' ---</comment>');
  }

  protected function import(InputInterface $input, OutputInterface $output) {

    // Getting php array of data from CSV
    $data = $this->get($input, $output);

    // Getting doctrine manager
    $em = $this->getContainer()->get('doctrine')->getManager();
    // Turning off doctrine default logs queries for saving memory
    $em->getConnection()->getConfiguration()->setSQLLogger(null);

    // Define the size of record, the frequency for persisting the data and the current index of records
    $size = count($data);
    $batchSize = 20;
    $i = 1;

    // Starting progress
    $progress = new ProgressBar($output, $size);
    $progress->start();

    // Processing on each row of data
    foreach ($data as $row) {

      $user = $em->getRepository('SRVDVServerBundle:User')
            ->findOneByEmail($row['email']);

      // If the user doest not exist we create one
      if (!is_object($user)) {
        $user = new User();
        $user->setEmail($row['email']);
      }

      // Updating info
      $user->setNom($row['nom']); // nom
      $user->setPrenom($row['prenom']); // prenom
      $user->setEmail($row['email']); // email
      $user->setUsername($row['Login']); // username
      $user->setPlainPassword("evry"); // username
      $user->setEnabled(1); // activation du compte

      $idStatut = $row['statut_user'];
      $statuts = $em->getRepository("SRVDVServerBundle:TypeUtilisateur")->findBy(array('id' => $idStatut));
      foreach ($statuts as $key => $value) {
        $statut = $value;
      }

      $user->setType($statut); // Type utilisateur
      $user->setNombreHeurTheo($statut->getNbrHeures());
      if ($row['isAdmin'] == 1) {
        $user->setRoles(array('ROLE_ADMIN')); // role array
      } else
        $user->setRoles(array('ROLE_ENSEIG')); // role array
       
// Do stuff here !
      // Persisting the current user

      $em->persist($user);

      // Each 20 users persisted we flush everything
      if (($i % $batchSize) === 0) {

        $em->flush();
        // Detaches all objects from Doctrine for memory save
        $em->clear();

        // Advancing for progress display on console
        $progress->advance($batchSize);

        $now = new \DateTime();
        $output->writeln(' of users imported ... | ' . $now->format('d-m-Y G:i:s'));
      }

      $i++;
      //$user = $this->get('fos_user.util.user_manipulator')->create($username, "evry", $email, 1, 0);
    }

    // Flushing and clear data on queue
    $em->flush();
    $em->clear();

    // Ending the progress bar process
    $progress->finish();
  }

  protected function get(InputInterface $input, OutputInterface $output) {
    // Getting the CSV from filesystem
    $fileName = './enseignant.csv';
    $output->writeln('TEST');
    // Using service for converting CSV to PHP Array
    $converter = $this->getContainer()->get('import.csvtoarray');
    $data = $converter->convert($fileName, ';');

    return $data;
  }

}
