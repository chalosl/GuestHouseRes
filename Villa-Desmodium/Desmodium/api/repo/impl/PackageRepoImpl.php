<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/4/2018
 * Time: 11:46 AM
 */

require_once __DIR__."/../PackagesRepo.php";
require_once __DIR__."/../../core/Packages.php";

class PackageRepoImpl implements PackagesRepo
{
    private $connection;

    /**
     * PackageRepoImpl constructor.
     */
    public function __construct()
    {

    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addPackage(Packages $packages): bool
    {
        $resp=$this->connection->
        query(
            "INSERT INTO Packages(PackageName, Tours, PackageOffers) VALUES(
                '{$packages->getName()}',
                '{$packages->getTour()}',
                '{$packages->getOffers()}')");
        return $resp;


        echo "chalo";
    }

    public function deletePackage(int $id): bool
    {
        // TODO: Implement deletePackage() method.
    }

    public function searchPackage(int $id): array
    {
        // TODO: Implement searchPackage() method.
    }

    public function updatePackage(Packages $packages): bool
    {
//
    }

    public function getAllPackages(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM  Packages");
        return $resultset->fetch_all();
    }
}