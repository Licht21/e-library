<?php
if (!isset($_GET['act']) || $_GET['act'] == '') { 
    if (!isset($_GET['del']) || $_GET['del'] == '') { 
        if (!isset($_GET['edt']) || $_GET['edt'] == '') { 

?>

<div class="container mt-3">
    <h3>DAFTAR BUKU</h3>
    <a href="tambah-mahasiswa">
        <button type="button" class="btn btn-primary mb-3">Tambah</button>
    </a>
    <table class="table table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th width="50px">No</th>
                <th>Judul Buku</th>
                <th>Author</th>
                <th>Tahun</th>
                <th>Sinopsis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            $data = mysqli_query($conn,"SELECT * FROM buku");
            while($r=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $no;?></td>
                    <td><?php echo $r['judul'];?></td>
                    <td><?php echo $r['author'];?></td>
                    <td><?php echo $r['tahun'];?></td>
                    <td><?php echo $r['sinopsis'];?></td>
                    
                    <td class="text-center">
                        <a href="edit-buku?id=<?php echo $r['id']; ?>">    
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <a href="hapus-buku?id=<?php echo $r['id']; ?>">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>

<?php
                }
                else if ($_GET['edit'] == 'edit'){
                    include "edit.php";
                }
            }
            else if ($_GET['del'] == 'hapus'){
                include "hapus.php";
            }
   
        }  else if ($_GET['act'] == 'tambah'){
            include "tambah.php";
        }
        
?>
