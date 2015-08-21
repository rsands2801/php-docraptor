<?php namespace DocRaptor;

interface HttpTransferInterface
{
    public function doRequest($uri, $postFields = null);
    
}
