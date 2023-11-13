<hr>
<p>
<?php
  define('CONSTANT', 2.71828);
  print('Число e равно ' . CONSTANT. '<br>');
  $num_e1 = CONSTANT;
  print('$num_e1 = '.$num_e1 . ' - ' . gettype($num_e1).'<br>' );
  settype($num_e1, 'string');
  print('$num_e1 = '.$num_e1 . ' - ' . gettype($num_e1).'<br>' );
  settype($num_e1, 'int');
  print('$num_e1 = '.$num_e1 . ' - ' . gettype($num_e1).'<br>' );
  settype($num_e1, 'bool');
  print('$num_e1 = '.$num_e1 . ' - ' . gettype($num_e1).'<br>' );
?>