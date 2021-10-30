<?php 

defined('THINK_PATH') or exit();

class SessionRedis {

    /**
     * Session有效时间
     */
   protected $lifeTime = '';

    /**
     * 数据库句柄
     */
   protected $handler;

    /**
     * 打开Session 
     * @access public 
     * @param string $savePath 
     * @param mixed $sessName
     * @return boolean
     */
    public function open($savePath, $sessName) {
        $this->lifeTime = C('SESSION_EXPIRE')?C('SESSION_EXPIRE'):ini_get('session.gc_maxlifetime');

        $this->handler = new Redis();
        $this->handler->connect(C('REDIS_HOST'), C('REDIS_PORT') );
        $this->handler->auth(C('REDIS_PWD'));
        $this->handler->select(C('REDIS_DATABASE'));
        return true;
    } 

    /**
     * 关闭Session 
     * @access public 
     */
   public function close() {
       $this->gc($this->lifeTime);
       $this->handler->close();
       $this->handler = null;
       return true;
   } 

    /**
     * 读取Session 
     * @access public 
     * @param string $sessID
     * @return boolean
     */
   public function read($sessID) {
       return $this->handler->get($sessID);
   } 

    /**
     * 写入Session 
     * @access public 
     * @param string $sessID 
     * @param String $sessData  
     */
   public function write($sessID,$sessData) {
       return $this->handler->set($sessID, $sessData, $this->lifeTime);
   }

    /**
     * 删除Session
     * @access public
     * @param  string  $sessID
     * @return boolean
     */
   public function destroy($sessID) {
       return $this->handler->delete($sessID);
   } 

    /**
     * Session 垃圾回收
     * @access public 
     * @param string $sessMaxLifeTime
     * @return boolean
     */
   public function gc($sessMaxLifeTime) { 
       return true;
   } 

    /**
     * 打开Session 
     * @access public 
     */
    public function execute()
    {
        session_set_save_handler(
            array(&$this, "open"),
            array(&$this, "close"),
            array(&$this, "read"),
            array(&$this, "write"),
            array(&$this, "destroy"),
            array(&$this, "gc")
        );
    }
}