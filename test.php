<?php
$input = "malayalam";
$input = str_replace(" ","",$input);
$input_array=str_split($input);
$input_array1=$input_array;
$input_lenght = sizeof($input_array);
echo $input .'--'.$input_lenght."<br>";
$input_unique = array();
$count_array=array();
while($value = array_shift($input_array))
{
    
    if(!in_array($value,$input_unique))
    {
        array_push($input_unique,$value);
        $count_array[$value]=1;
    }
    else {$count_array[$value]++;}
}
$unique_count = sizeof($input_unique);

$input_unique1 = $input_unique;

for($i=0;$i<$unique_count;$i++)
{
  echo $input_unique[$i]. "  ";
}
echo "<br/>";

$k = $input_lenght;

while($k > 0)
{
foreach($input_unique as $key => $value)
{
  if($count_array[$value] > 0)
  {
     echo "1  ";
     $count_array[$value]--;
      $k--;
  }
    else
    {
        echo "*  ";
    }
}
echo "<br/>";

}



?>

