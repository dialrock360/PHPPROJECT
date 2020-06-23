<?php
namespace src\entities;

class Filemanager
{
    private $objname;
    private $filename;
    private $filepath;
    private $filesize;
    private $maxize;
    private $filetmp;
    private $file_extensions;
    private $file_target;
    private $file_errMSG;

    /**
     * Filemanager constructor.
     * @param $objname
     */
    public function __construct()
    {
        $this->objname = 'files';
        $this->maxize = 10000000;
        $this->file_extensions = array('jpeg', 'jpg', 'png', 'gif');
    }

    /**
     * Filemanager constructor.
     * @param $filename
     * @param $filetmp
     * @param $filesize
     * @param $upload_target
     * @param $objname
     * @param $path
     */

    public function setFile($filename, $filetmp, $filesize, $upload_target, $objname,$path)
    {
        $this->objname = $objname;
        $this->filepath = $path;
        $this->filename = $filename;
        $this->filesize = $filesize;
        $this->filetmp = $filetmp;
        $this->file_target = $upload_target;
    }

    /**
     * @return mixed
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * @param mixed $filepath
     */
    public function setFilepath($filepath)
    {
        $this->filepath = $filepath;
    }

    /**
     * @return int
     */
    public function getMaxize()
    {
        return $this->maxize;
    }

    /**
     * @param int $maxize
     */
    public function setMaxize($maxize)
    {
        $this->maxize = $maxize;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * @return mixed
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * @param mixed $filesize
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;
    }

    /**
     * @return mixed
     */
    public function getFiletmp()
    {
        return $this->filetmp;
    }

    /**
     * @param mixed $filetmp
     */
    public function setFiletmp($filetmp)
    {
        $this->filetmp = $filetmp;
    }

    /**
     * @return mixed
     */
    public function getFileExtensions()
    {
        return $this->file_extensions;
    }

    /**
     * @param mixed $file_extensions
     */
    public function setFileExtensions($file_extensions=array())
    {
        $this->file_extensions = $file_extensions;
    }

    /**
     * @return mixed
     */
    public function getFileTarget()
    {
        return $this->file_target;
    }

    /**
     * @param mixed $file_target
     */
    public function setFileTarget($file_target)
    {
        $this->file_target = $file_target;
    }

    /**
     * @return mixed
     */
    public function getObjname()
    {
        return $this->objname;
    }

    /**
     * @param mixed $objname
     */
    public function setObjname($objname)
    {
        $this->objname = $objname;
    }

    /**
     * @return mixed
     */
    public function getFileErrMSG($param)
    {
        if ($param==1){
            $this->file_errMSG="Sorry, your file is too large.";
        }
        if ($param==2){
            $this->file_errMSG=" Sorry,  invalid extensions files are used.";

        }
        if ($param==3){
            $this->file_errMSG=" Sorry,  double extensions files are used.";

        }
        if ($param==4){
            $this->file_errMSG=" Sorry, error";

        }
        return $this->file_errMSG;
    }

    /**
     * @param mixed $file_errMSG
     */
    public function setFileErrMSG($file_errMSG)
    {
        $this->file_errMSG = $file_errMSG;
    }




    private function filenamemeker() {
        return strtolower(trim(($this->objname=='')?explode('.',$this->filename)[0]:$this->objname))."_".$this->filesize."_".date("Ymd").".".strtolower(pathinfo($this->filename,PATHINFO_EXTENSION));
    }
    private function valid_extension() {

        $isvalide=1;
        $ext = pathinfo($this->filename, PATHINFO_EXTENSION);
        if(!in_array($ext, $this->file_extensions)){
            $isvalide=0;
        }
        $objfile= explode('.',$this->filename);
        $objfile[0]="";
        foreach ($objfile as $file){

            if(!in_array($file, $this->file_extensions)){
                $isvalide=0;
                $this->setFileErrMSG($this->getFileErrMSG(2));
            }
        }
        return $isvalide;

    }
    private function valid_size() {

        $isvalide=1;
        if($this->filesize < $this->maxize){
            $isvalide=0;
            $this->setFileErrMSG($this->getFileErrMSG(1));
        }
        return $isvalide;

    }

    public  function uploadfile() {

        if(!empty($this->filename) && !empty($this->file_target)){
            // rename uploading image
            $userpic=($this->filepath=='')?$this->filenamemeker():$this->filepath;
            // $userpic = filename($name,$size,$objame);
            // allow valid image file formats
            if($this->valid_extension()==1 && $this->valid_size()==1 ){

             //   move_uploaded_file($this->filetmp,$this->file_target.$userpic);
            }

        }
        return $userpic;
    }
}