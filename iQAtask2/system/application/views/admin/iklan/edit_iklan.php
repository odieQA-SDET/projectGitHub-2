<h3> Tambah Data </h3>
<?php echo form_open_multipart('cadmin/edit_iklan/'.$hasil->id); ?>

<table>
<tr>
	<td class="td"> URL </td>
	<td class="td"> : </td>
	<td> <?php echo form_input('url', $hasil->url); ?> </td>
</tr>
<tr>
	<td class="td"> Gambar </td>
	<td class="td"> : </td>
	<td> <?php echo form_upload('userfile'); ?> </td>
</tr>
<tr>
	<td> <?php echo form_submit('submit', 'Submit', 'id="submit"'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
