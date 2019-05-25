<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css') ?>">

    <title>Data Programmers</title>
  </head>
  <body>
    <div class="container">

        <h1 align="center" class="font-weight-bold">Data Programmer dan Skill</h1>
    	<br>

        <h4>Tambah Programmer Baru</h4>
        <div class="mb-5 pb-5" style="height: 100px">
            <table>
                <form method="post" action="<?=base_url('Programmer/tambahProgrammer') ?>">
                    <tr>
                        <td ><input type="text" name="nama" class="form-control"></td>
                        <td><button class="btn btn-md btn-info">Tambah</button></td>
                    </tr>
                </form>
            </table>
        </div>
        

        <div class="mt-5">
        <?php   foreach ($tampil as $t) { 
        $id = $t->id;  
        ?>
    	    <table class="table table-bordered">
    	    	<tr>
    	    		<th><?= $t->name ?></th>
    	    		<td rowspan="2" width="300px">
                        <form method="post" action="<?=base_url('Programmer/tambahSkill/'.$id) ?>">
                            <div class="input-group w-75">
                                <input type="text" class="form-control" placeholder="Tambah Skill..." name="skill">
                                <span class="input-group-btn" style="margin-right: -3px;">
                                    <button type="submit" class="bg-primary btn-md btn"> Tambah</button>
                                </span>
                            </div>
                        </form>
    	    		</td>
    	    	</tr>
    	    	<tr>
                    <td><?=$t->skill ?></td>
    	    	</tr>
    	    </table>
    	   <?php } ?>
        </div>
    </div>

    <script src="<?=base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.js') ?>"></script>
    
    <script type="text/javascript">
    	function tambahData(id){

        }

    </script>

  </body>
</html>