<div id="valid_data_div">
	<div>
		<b>VALIDATION STATUS</b> - &nbsp;
		<i>{$status}</i>
	</div>
	<div>
		<b>VALIDATION MESSAGE</b> - &nbsp;
		<i>{$message}</i>
	</div>

	<div>
		<center>
			<table border="1" s>
				<thead>
					<tr>
						<th>#</th>
						<th>Input Label</th>
						<th>Input Balue</th>
					</tr>
				</thead>

				<tbody>
					{assign var="serial_number" value=1}
					{foreach from=$valid_data key=label item=value}
						<tr>
							<td>{$serial_number++}.</td>
							<td>{$label|capitalize}</td>
							<td>{$value}</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		<center>
	</div>
</div>