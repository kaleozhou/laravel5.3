#laravel5.3 笔记
##安装环境laravel环境，laravel中文学习论坛上面有相关的教程
##创建应用
    laravel new blog
其中blog就是你的应用的名字
##数据迁移
    php artisan migtate
##创建用户登陆
    php artisan make:auth --views
##创建数据表
    php artisan make:migration create_users_table --create=users  
##创建模型
    php artisan make:model Models/Article
##创建控制器
    php artisan make:controller PhotoController
##编写填充器
    php artisan make:seeder UserTableSeeder
##定义关联
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Article extends Model
    {
    //
    public function Sort(){
                return $this->belongsTo('App\Models\Sort');
                    
    }

    }
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Sort extends Model
    {
        //
        public function Article(){
            return $this->hasMany('App\Models\Article');
        }
    }
##删除迁移文件
    -先回滚或者重置
    php artisan migrate:reset
    -删除迁移文件
    -执行
    composer dump-autoload
