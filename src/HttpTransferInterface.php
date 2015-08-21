<?php namespace DocRaptor;

interface HttpTransferInterface
{
    public function doPost($uri, array $postFields);
    
    public function doGet($uri);
}
