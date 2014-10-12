<?php get_header(); ?>
	<table align="center" style="width:100%;border:none;margin:0px;">
		<tr>
			<td>
				<img width="100%" src="<?php echo dirname(THEMATER_URL);?>/images/default-slides/2.jpg" align="center" />
			</td>
		</tr>
		<tr>
			<td valign="top">
				<table style="width:100%;border:none;margin:0px 0px 0px 0px;">
					<tr>
						<td valign="top">
							<!-- tempat news -->
							<div id="content" width="70%">

							</div>
						</td>
						<td align="right" valign="top">
							<?php get_sidebars(null); ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<?php get_footer(); ?>