<!-- 命名空间 namespace
必须是文件中的第一行代码，命名空间使用\符号
use 在文件的开始引入一个命名空间下的类

类文件的自动加载 sql_autoload_register
魔术方法 特点：方法名以两个下划线开头（__)
在某一时刻自动调用
-构造方法：__construct
$this 代表实例化的那个对象，$this的值是动态的，所以叫动态绑定
静态成员：在方法或属性前添加static来定义静态成员
在类外部使用类名:: 来访问静态成员 如：Boy::$构造方法：__construct
在类内部使用self::访问静态成员 
静态成员属于类，无论有多少个对象，值只有一个
面向对象有三大特性：封装，继承，多态
继承：使用extends实现继承 单继承
Trait : 特质，可以让我们不使用继承就可与在多个类中复用方法的机制
特质中只能定义方法 -->


