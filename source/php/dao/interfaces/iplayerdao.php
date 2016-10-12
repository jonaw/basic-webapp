<?php
interface IPlayerDAO{
    public function create(IPlayer $player);
    public function read(IPlayer $player);
    public function update(IPlayer $player);
    public function delete(IPlayer $player);

    public function getAll($filter);
    public function getAllPaginated($filter, $page, $pageSize);
    public function getNumberOfPages($filter, $pageSize);
}
?>