<?php
$this->load->view('header'); 
$this->load->view('space');?>
<form name = "tabel" method="post" action="<?=base_url();?>index.php/master/grup_harga/delete_This">
<table align = 'center'>
	<tr>
		<th nowrap colspan="3">Hapus Data Berikut ? </th>
	</tr>
	<tr>
		<td nowrap>Kode</td>
		<td nowrap>:</td>
		<td nowrap><?=$header->KdGrupHarga;?></td>
			<input type='hidden' readonly name='kode' id='kode' value='<?=$header->KdGrupHarga;?>' />		
	</tr>
	<tr>
		<td nowrap>Nama</td>
		<td nowrap>:</td>
		<td nowrap><?=$header->Keterangan;?></td>
	</tr>
	<tr>
		<td nowrap colspan="3">
			<input type='submit' value = "Yes"/>		
			<input type="button" value="No" ONCLICK =parent.location="<?=base_url();?>index.php/master/grup_harga/" />
		</td>
	</tr>
</table>
</form>
<?php
$this->load->view('footer'); ?>