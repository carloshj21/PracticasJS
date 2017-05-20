<?php
				$conn=mysqli_connect('localhost','root','','ajax');
				$query='SELECT * FROM empleados';
				$res=mysqli_query($conn,$query);
				$fila=mysqli_fetch_assoc($res);
				$x=0;
				while($fila)
				{
					$arrenombres[$x]=$fila['nombre'];
					$arreapellidos[$x]=$fila['apellido'];
					$x++;
					$fila=mysqli_fetch_assoc($res);
				}
				$arre[]=$arrenombres;
				$arre[]=$arreapellidos;
				echo json_encode($arre);
?>
