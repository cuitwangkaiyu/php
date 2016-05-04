<?php
require("header.php");
?>

		<div class="page_row">
		    <!--左边的 -->
			<div class="page_main_msg left">
				<!-- 第一 -->
				<div class="left_row">
					<div class="list pic_news">
						<div class="list_bar">
							 <span style="float:left">推荐图书</span>
							 <span style="float:right"><a href="./tuijian.php">更多>></a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
																会员价<?php echo $data[huiyuanjia]?>￥
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
				<!-- 排行榜 -->
				<!-- 特价 -->
				<div class="left_row">
					<div class="list pic_news">
						<div class="list_bar">
							 <span style="float:left">特价区域</span>
							 <span style="float:right"><a href="./tejia.php">更多>></a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
																会员价<?php echo $data[huiyuanjia]?>￥
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
				<!-- 特价 -->
				<!-- 新品上市 -->
				<div class="left_row">
					<div class="list pic_news">
						<div class="list_bar">
							 <span style="float:left">新品上市</span>
							 <span style="float:right"><a href="./new.php">更多>></a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
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
																会员价<?php echo $data[huiyuanjia]?>￥
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
				<!-- 新品上市 -->
			</div>
			<!--左边的 -->

			<?php

			require("right.php");
			?>

			<!-- 右边的用户登录。留言。投票 -->
		</div>
<?php
require("footer.php");
?>
