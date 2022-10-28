


		<div class="board">	 
			<div class="grid-item">
			<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
			<div class="grid-item">
				<table class='board__table'>
				<thead>

				</thead>
				<tbody>
				<?php	
				$arrayLength = count($board_taskList);
				$i = 0;
				// var_dump($board);
				while ($i < $arrayLength) {?>
					<tr class="board__row">
						<th scope='row'>
							<label class='custom-control-label' for='tableDefaultCheck2'></label>
						</th>						
						<td style = 'font-size: 12px; width: 100px'><?php echo $board_taskList[$i]->fecha;?></td>
						<td> <?php echo $board_taskList[$i]->nota."-";?></td>
						<td style='padding-left: 1em'> <?php echo $board_taskList[$i]->usuario;?></td>
						<td style='padding-left: 1em'>
							<form action="<?php echo site_url('pages/verify_task'); ?>" method ='POST'>
								<input type="hidden" name="vid" value="<?= $board_taskList[$i]->id?>">
								<button type='submit' class='btn btn-verify' name='Verificar'>Verificar</button>
							</form>
						</td>						
					</tr><?php
					$i++;
					}
					 ?>	  
				</tbody>
			</table>
			</div>
		</div>
