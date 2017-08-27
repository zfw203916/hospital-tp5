<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/18/2017
 * Time: 11:06 PM
 */

namespace app\index\controller;
use think\Db;
class Query extends Base
{

    /**
     * �����󶨲�ѯ
     * @return mixed
     */
    public function index(){
        $id = 1;
        $data = Db::query('SELECT id FROM tp5_user WHERE id=?',[$id]);
        $this->assign('data', $data);
        //return $this->fetch();

    }

    /**
     * ʹ�ò�ѯ������
     */
    public function tableTest($id = null){
        $result = Db::table('think_user')->where('id',$id)->find();
        var_dump($result);die;
    }


    /**
     * ԭ��ִ�У���ѯ��query
     */
    public function sqlQuery(){
        $result = Db::execute('INSERT INTO think_user (name, age) VALUES ("execute","20")');
        var_dump ($result);
    }

    /**
     * �л����ݿ�
     * �ڽ������ݿ��ѯ��ʱ��֧���л����ݿ���в�ѯ
     * @throws \Exception
     * @throws \think\exception\PDOException
     */
    public function ConnectQuery(){
        $demo = Db::connect('demo');
        //$result = Db::connect('demo')->query('select * from demo_user');���Ե��β�ѯ��Ч
        $result = $demo->query('SELECT * FROM demo_user');
        var_dump($result);
    }

    /**
     * ��ѯ������
     * ����ԭ����ѯ�⣬5.0���ṩ�����ݿ��ѯ��������
     * ���Ը�����ִ�����ݿ��������ѯ����������PDOʵ�֣��Բ�ͬ�����ݿ���������ͳһ���﷨��s
     * hinkPHP 5.0��ѯ������ʹ�� PDO�����󶨣��Ա���Ӧ�ó������� SQLע�룬��˴���Ĳ����������ת�������ַ���
     */
    public function SelectDb(){
        $list = Db::table('think_user')
            ->where('id=1')
            ->find();
        var_dump($list);
    }

    /**
     * �������������ݿ������ļ������������ݱ��ǰ׺Ϊthink_��
     * ��ˣ�table�������Ըĳ�name������
     * �����Ͳ�����Ϊ���ݱ�ǰ׺���޸Ķ��Ķ�CURD����
     */
    public function SelectDb2(){
        $list = Db::name('user')
            ->where('id=1')
            ->find();
        var_dump($list);
    }

    /**
     * ����֧��
     * ������Ҫ�õ�����Ĺ��ܣ�
     * �����޸����ݱ������ΪInnoDB��������MyISAM��
     */
    public function TransactionQuel(){
        Db::transaction(function(){
            Db::name('user')
                ->delete(1);
            Db::table('think_user')
                ->insert(['age' => 28, 'name' => 'transaction']);
        });

    }
	/**
	* ������
	*/
	
	public function array_bind(){

		$name = 'array';
		$age = '15';
		
		$result =  Db::execute('INSERT INTO think_user (name, age) VALUES (?, ?)',[$name, $age]);
        var_dump($result);
		
	}

    /**
     * ʹ�ò�ѯ����������һ������
     */
    public function array_bind2(){
        $data = [
            'name' => 'array2',
            'age' => '152'
        ];

        $result = Db::name('user')->insert($data);
        var_dump($result);
    }

    /**
     * @param $key
     * @param $val
     * дһ�������鿴��Ӧ��Ϣ,
     * ��ѯ`id`Ϊ`29`�����ݲ���ӡ����
     * http://thinkphp5.test.com/public/index.php/index/query/selectQuery/key/id/val/29
     * ע����id/val/29 �е�id
     * ���Բ�����ʽ����������
     */
    public function selectQuery($key ,$val){

        $data = Db::name('user')->where($key, $val)->select();
       //echo Db::name('user')->getLastSql();die; //SELECT * FROM `think_user` WHERE `id` = 29
        var_dump($data);
    }

    public function delete(){
        $result = Db::name('user')->delete('35');//id = 35;
        $this->selectQuery('id',25);//����selectQuery����
        //var_dump($result);
    }

    /**
     * ��ȡĳ���е����ݣ�ʹ��column����
     */
    public function column(){

        $resutl = Db::name('user')->where('nickname=22')->column('username', 'id');
        //echo Db::name('user')->getLastSql();die;
        var_dump($resutl);
    }

    /**
     * �ֿ��ѯ
     */
    public function aiea(){
        Db::name('data')
            ->where('status', '>', 0)
            ->chunk(100, function ($list) {
                // ����100����¼
                foreach($list as $data){

                }
            });
    }

}