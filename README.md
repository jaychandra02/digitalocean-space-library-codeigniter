# digitalocean-space-library-codeigniter
Digital Ocean Space - Library - Codeigniter 

# Usage
Update Your Credential in config->s3.php

Load Library<br/>
$this->load->library('S3_upload');<br/>
$this->load->library('S3');<br/><br/>

Upload File<br/>
$destination = "local_file_path";<br/>
$this->s3_upload->upload_file($destination, 'bucket_folder');<br/>
