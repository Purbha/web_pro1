<?php
function set_idtrans()
{
	$tgl = date('ymd');
	$idtrans = ambil_idtrans($tgl);
	$hasil = mysqli_num_rows($idtrans);
	if ($hasil<>0)
	{
		while ($urut = mysqli_fetch_array($idtrans))
		{
			$no = substr($urut['idtrans'],6,4);
			$no = intval($no);
			$no++;
			if ($no < 10)
			{
				$no = '000'.strval($no);
			}
			elseif ($no < 100)
			{
				$no = '00'.strval($no);
			}
			elseif ($no < 1000)
			{
				$no = '0'.strval($no);
			}
			else
			{
				$no = strval($no);
			}
		}
	}
	else
	{
		$no = '0001';
	}
	return $tgl.$no;
}

function garansi($kode)
{
	if ($kode == 1) { return "Ya"; } else { return "Tidak"; } 
}
?>