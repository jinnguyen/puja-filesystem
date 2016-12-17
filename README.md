# puja-filesystem

Puja-FileSystem provides basic functions for handle File/Folder

<h3>Puja\FileSystem\File</h3>
Document document at http://php.net/manual/en/class.splfileobject.php <br />
<strong>Addition functions</strong>
<pre><strong>bool Puja\FileSystem\File::isUploadedFile()</strong> // Tells whether the file was uploaded via HTTP POST
Returns TRUE if the file named by filename was uploaded via HTTP POST. This is useful to help ensure that a malicious user hasn't tried to trick the script into working on files upon which it should not be working--for instance, /etc/passwd.</pre>

<pre><strong>bool Puja\FileSystem\File::moveUploadedFile()</strong> // Moves an uploaded file to a new location
This function checks to ensure that the file designated by filename is a valid upload file (meaning that it was uploaded via PHP's HTTP POST upload mechanism). If the file is valid, it will be moved to the filename given by destination.</pre>




<h3>Puja\FileSystem\Folder</h3>
Document at http://php.net/manual/en/class.directoryiterator.php

<h3>Puja\FileSystem\TemporaryFile</h3>
Document at http://php.net/manual/en/class.spltempfileobject.php