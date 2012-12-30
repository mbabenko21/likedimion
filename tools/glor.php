<?php
/**
 * @author Maks Babenko <mbabenko21@gmail.com>
 * @package
 *         Time: 22:50
 */
require_once dirname(__FILE__) . "/../bootstrap.php";
$cli = new \Symfony\Component\Console\Application("Glor Application", "1.0.1");

/** @var $em \Doctrine\ORM\EntityManager */
$em = \MB\Container::instance("di")->get("entityManager");
$db = $em->getConnection();
$helperSet = array(
    "db" => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($db),
    "dialog" => new \Symfony\Component\Console\Helper\DialogHelper(),
    "em" => new Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
);
$cli->setHelperSet(new \Symfony\Component\Console\Helper\HelperSet($helperSet));

$cli->addCommands(array(
    //Migrations
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\DiffCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\ExecuteCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\GenerateCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\MigrateCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\StatusCommand(),
    new \Doctrine\DBAL\Migrations\Tools\Console\Command\VersionCommand()
));
\Doctrine\ORM\Tools\Console\ConsoleRunner::addCommands($cli);
$cli->run();