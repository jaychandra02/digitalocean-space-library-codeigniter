# digitalocean-space-library-codeigniter
Digital Ocean Space - Library - Codeigniter 

# Usage
Update Your Credential in config->s3.php

Load Library
$this->load->library('S3_upload');
$this->load->library('S3');

Upload File
$destination = "local_file_path";
$this->s3_upload->upload_file($destination, 'bucket_folder');
