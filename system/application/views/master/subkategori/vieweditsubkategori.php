<?php
$this->load->view('header');
$this->load->view('space'); 
$gantikursor = "onkeydown=\"changeCursor(event,'subkategori',this)\"";?>
<script language="javascript" src="<?=base_url();?>public/js/global.js"></script>
<body onload="firstLoad('subkategori')">
<table align = 'center'>
<form method='post' name="subkategori" id="subkategori" action='<?=base_url();?>index.php/master/subkategori/save_subkategori'>
	<tr>
		<td nowrap>Kode</td>
		<td nowrap>:</td>
		<td nowrap><input type='text' maxlength="4" size="5" readonly name='kode' id='kode' value='<?=$viewsubkategori->KdSubKategori;?>' /></td>
	</tr>
	<tr>
		<td nowrap>Nama</td>
		<td nowrap>:</td>
		<td nowrap><input type='text' maxlength="25" size="35" id='nama' name='nama' value='<?=$viewsubkategori->NamaSubKategori;?>' <?=$gantikursor;?>/></td>
	</tr>
	<tr>
		<td nowrap>Kategori</td>
		<td nowrap>:</td>
		<td nowrap>
		<select size="1" id="master" name="master" <?=$gantikursor;?>>
		<?php
		for($a = 0;$a<count($master);$a++){
		 	$select = "";
		 	if($viewsubkategori->KdKategori==$master[$a]['KdKategori']){
				$select = "selected";
			}
		?>
		<option <?=$select;?> value= "<?=$master[$a]['KdKategori']?>"><?=$master[$a]['NamaKategori']?></option>
		<?php
		}
		?>
		</select>
		</td>
	</tr>
	<tr>
		<td nowrap colspan="3">
		<?php if($edit){ ?>
			<input type='button' value='Save' onclick="cekMaster2('kode','nama','subkategori','Kode Sub Kategori','Nama Sub Kategori');"/>
		<?php } ?>
			<input type="button" value="Back" ONCLICK =parent.location="<?=base_url();?>index.php/master/subkategori/" />
		</td>
	</tr>
</form>
</table>
<?php
$this->load->view('footer'); ?>