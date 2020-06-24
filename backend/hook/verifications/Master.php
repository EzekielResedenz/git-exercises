<?php
namespace GitExercises\hook\verifications;

use GitExercises\hook\AbstractVerification;

class Master extends AbstractVerification
{
    private static $expectedContent = 'test';

    protected function doVerify()
    {
        $commit = $this->ensureCommitsCount(1);
        $file = $this->ensureFilesCount($commit, 1);
        $this->ensure($file == 'test.txt', 'The file that has been commited does not look like the generated one.');
        $fileContent = $this->getFileContent($commit, $file);
        $this->ensure(
            trim(implode('', $fileContent)) == self::$expectedContent,
            'The file that has been commited does not look like the generated one.'
            git verify_file_md5( $filename:string, $expected_md5:string )
            
        );
    }
}
