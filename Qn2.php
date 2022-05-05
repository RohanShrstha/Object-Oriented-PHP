 <?php
    class employee{
        public $code,$name,$des;
        function __construct($a,$b,$c){
            $this->code=$a;
            $this->name=$b;
            $this->des=$c;
        }
        public function disemp(){
            echo "<td>". $this->code ."</td><td>".$this->name."</td><td>".$this->des."</td>";
        }
        public function getName(){
            return $this->name;
        }
    }
    class emp_acc extends employee{
        public $ano, $jdate;
        function __construct($a,$b,$c,$d,$e){
            parent::__construct($a,$b,$c);
            $this->ano=$d;
            $this->jdate=$e;
        }
        public function disacc(){
            echo "<td>". $this->ano ."</td><td>".$this->jdate."</td>";
        }
    }
    class emp_sal extends emp_acc{
        public $bs, $earn, $ded, $total;
        function __construct($a,$b,$c,$d,$e,$f,$g,$h){
            parent::__construct($a,$b,$c,$d,$e);
            $this->bs=$f;
            $this->earn=$g;
            $this->ded=$h;
            $this->total = $this->bs+$this->earn-$this->ded;
        }
        public function dissal(){
            echo "<td>".$this->bs ."</td><td>".$this->earn."</td><td>".$this->ded."</td><td>".$this->total."</td>";
        }
    }
    $e1[0]=new emp_sal(1,"Ram","HOD",10001,"02/02/2009",50000,1000,200);
    $e1[1]=new emp_sal(2,"Shyam","Manager",10002,"12/10/2012",35000,3500,400);
    $e1[2]=new emp_sal(3,"Ramesh","Assistant Manager",10003,"18/11/2013",24000,4000,250);
    $e1[3]=new emp_sal(4,"Sita","Department Manager",10004,"19/05/2015",20000,3000,650);
    $e1[4]=new emp_sal(5,"Gita","Department Manager",10005,"26/07/2017",22000,4000,750);

    function display($e1){
        echo "<table class='table'>
        <tr><thead class='thead-dark'><th>Emp code</th>
        <th>Emp Name</th><th>Designation</th>
        <th>Account No</th><th>Joining Date</th>
        <th>Basic Pay</th><th>Earning</th>
        <th>Deduction</th><th>Total Salary</th></thead></tr>";
        for($i=0; $i<5; $i++){
            echo "<tr>";
            $e1[$i]->disemp();
            $e1[$i]->disacc();
            $e1[$i]->dissal();
            echo "</tr>";
        }
        echo"</table>";
    }
echo display($e1);
?>
        