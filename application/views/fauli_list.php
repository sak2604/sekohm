 <h1> ตารางการทำความผิด</h1>

<section>
<table id="customers">

<br><br>
<tr>
<th></th>
<th>wron_id</th>
<th>หมวดความผิด</th>
<th>ฐานความผิด</th>
<th>สถานที่เกิดเหตุ</th>
<th>จุดเกิดเหตุ</th>
<th>วันที่กระความผิด</th>
<th>รายละเอียดกระทำความผิด</th>
</tr>

<?php $i =1;  foreach ($fauli_res as $row){ ?>
<tr>
<th scope="row"><?php  $i++; ?></th>
<td><?php echo $row->wron_id ?></td>
<td><?php echo $row->ca ?></td>
<td><?php echo $row->base ?></td>
<td><?php echo $row->plac_ ?></td>
<td><?php echo $row->plac ?></td>
<td><?php echo $row->date ?></td>
<td><?php echo $row->des ?></td>
</tr>
<?php } ?>

</table>






</section>
