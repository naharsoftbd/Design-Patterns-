Class Singleton{
    private static $instance;
    public function getInstance(){
      if(!issset(Singleton::$instance)){
         return Singleton::$instance = new Singleton();
      }
      
      public function getSingletonMsg(){
          echo 'Hi! This is Singleton';
      }
}