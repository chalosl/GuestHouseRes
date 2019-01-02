<?php
/**
 * Created by IntelliJ IDEA.
 * User: CHALO
 * Date: 12/4/2018
 * Time: 11:50 AM
 */

require_once __DIR__."/../core/Packages.php";


interface packagesBo
{
    public function addPackage(Packages $packages): bool;
    public function deletePackage(int $id): bool;
    public function searchPackage(int $id): array;
    public function updatePackage(Packages $packages): bool;
    public function getAllPackages(): array;

}