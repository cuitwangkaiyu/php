<?php
require("header.php");
?>

		<div class="page_row">
		    <!--��ߵ� -->
			<div class="page_main_msg left">
				<!-- ��һ -->
				<div class="left_row">
					<div class="list pic_news">
						<div class="list_bar">
							 <span style="float:left">�Ƽ�ͼ��</span>
							 <span style="float:right"><a href="./tuijian.php">����>></a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
						</div>
						<div id="tw" class="list_content">
							<div style="width:100%;overflow:hidden;white-space:nowrap;">
								<table width="100%" align="left" cellpadding="0" cellspacing="0" border="0">
									<tr>

										<td>
											<table width="100%" cellpadding="0" cellspacing="0" border="0">
												<tr>
                                                <?php
												$sql="select * from shu where tuijian=1 order by id DESC limit 0,5";
												$result=mysql_query($sql);
												while($data=mysql_fetch_array($result)){
												?>
													<td sytle="height:28px;">
														<dl style="width:100%;height:140px;padding-right:10px;">
															<dd style="margin-left:0;">
																<a href="./goodsDetail.php?goodsId=<?php echo $data[id]?>">
																   <img width="105" height="110" src="<?php echo $data[tupian]?>"/>
																</a>
															</dd>
															<dt>
																<?php echo $data[name]?>
															</dt>
															<dt>
																��Ա��<?php echo $data[huiyuanjia]?>��
															</dt>

														</dl>


													</td>

                                                    <?php
													}
													?>
												</tr>
											</table>
										</td>

									</tr>
								</table>
							</div>
						 </div>
					</div>
				</div>
				<!-- ���а� -->
				<!-- �ؼ� -->
				<div class="left_row">
					<div class="list pic_news">
						<div class="list_bar">
							 <span style="float:left">�ؼ�����</span>
							 <span style="float:right"><a href="./tejia.php">����>></a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
						</div>
						<div id="tw" class="list_content">
							<div style="width:100%;overflow:hidden;white-space:nowrap;">
								<table width="100%" align="left" cellpadding="0" cellspacing="0" border="0">
									<tr>

										<td>
											<table width="100%" cellpadding="0" cellspacing="0" border="0">
												<tr>
									         <?php
												$sql="select * from shu where tejia=1 order by id DESC limit 0,5";
												$result=mysql_query($sql);
												while($data=mysql_fetch_array($result)){
												?>
													<td sytle="height:28px;">
														<dl style="width:100%;height:140px;padding-right:10px;">
															<dd style="margin-left:0;">
																<a href="./goodsDetail.php?goodsId=<?php echo $data[id]?>">
																   <img width="105" height="110" src="<?php echo $data[tupian]?>"/>
																</a>
															</dd>
															<dt>
																<?php echo $data[name]?>
															</dt>
															<dt>
																��Ա��<?php echo $data[huiyuanjia]?>��
															</dt>

														</dl>


													</td>

                                                    <?php
													}
													?>
												</tr>
											</table>
										</td>

									</tr>
								</table>
							</div>
						 </div>
					</div>
				</div>
				<!-- �ؼ� -->
				<!-- ��Ʒ���� -->
				<div class="left_row">
					<div class="list pic_news">
						<div class="list_bar">
							 <span style="float:left">��Ʒ����</span>
							 <span style="float:right"><a href="./new.php">����>></a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
						</div>
						<div id="tw" class="list_content">
							<div style="width:100%;overflow:hidden;white-space:nowrap;">
								<table width="100%" align="left" cellpadding="0" cellspacing="0" border="0">
									<tr>

										<td>
											<table width="100%" cellpadding="0" cellspacing="0" border="0">
												<tr>
												    <?php
												$sql="select * from shu  order by id DESC limit 0,5";
												$result=mysql_query($sql);
												while($data=mysql_fetch_array($result)){
												?>
													<td sytle="height:28px;">
														<dl style="width:100%;height:140px;padding-right:10px;">
															<dd style="margin-left:0;">
																<a href="./goodsDetail.php?goodsId=<?php echo $data[id]?>">
																   <img width="105" height="110" src="<?php echo $data[tupian]?>"/>
																</a>
															</dd>
															<dt>
																<?php echo $data[name]?>
															</dt>
															<dt>
																��Ա��<?php echo $data[huiyuanjia]?>��
															</dt>

														</dl>


													</td>

                                                    <?php
													}
													?>
												</tr>
											</table>
										</td>

									</tr>
								</table>
							</div>
						 </div>
					</div>
				</div>
				<!-- ��Ʒ���� -->
			</div>
			<!--��ߵ� -->

			<?php

			require("right.php");
			?>

			<!-- �ұߵ��û���¼�����ԡ�ͶƱ -->
		</div>
<?php
require("footer.php");
?>
