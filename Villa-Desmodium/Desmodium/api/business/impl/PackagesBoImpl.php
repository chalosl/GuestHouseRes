<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/4/2018
 * Time: 11:51 AM
 */

require_once __DIR__."/../packagesBo.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Packages.php";
require_once __DIR__."/../../repo/impl/PackageRepoImpl.php";


class PackagesBoImpl implements packagesBo
{

    public function addPackage(Packages $packages): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $packageRepo = new PackageRepoImpl();
        $packageRepo->setConnection($connection);
        return $packageRepo->addPackage($packages);
//       echo "chalo";

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
        $connection = (new DBConnection())->getDBConnection();
        $pakageRepo = new PackageRepoImpl();
        $pakageRepo->setConnection($connection);
        return $pakageRepo->updatePackage($packages);
    }

    public function getAllPackages(): array
    {
        $connection =(new DBConnection())->getDBConnection();
        $packageRepo = new PackageRepoImpl();
        $packageRepo->setConnection($connection);
        return $packageRepo->getAllPackages();

    }
}