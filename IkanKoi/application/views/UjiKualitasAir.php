<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("includes/head.php") ?>
        <script>
            $(function(){
            $('#proses').click(function(){
                var suhu = $('#suhu').val();
                var tds = $('#tds').val();
                var dos = $('#dos').val();
                var alfa = new Array(64);
                var z = new Array(64);

                //untuk menampilkan hasil
                $('#score').val(nilaiHasil());
                $('#hasil').val(nilaiHasil());
                $('#koh').val(gradeKoh());
                $('#sow').val(gradeSow());
                $('#san').val(gradeSow());
                $('#shi').val(gradeShi());
                $('#oga').val(gradeOga());
                $('#yam').val(gradeOga());

                //untuk menampilkan tabel alfa dan z setiap aturan
                var z_result = "";
                for(i = 0; i < z.length; i++){
                    z_result += "<tr><td>"+(i+1)+"</td><td>alfa</td><td>"+alfa[i]+"</td><td>z</td><td>"+z[i] + "</td><tr/>";
                }
                $('#z-result').html(z_result);

                //untuk menampilkan keanggotaan
                $('#suhubaik').val(suhuBaik());
                $('#suhusedang').val(suhuSedang());
                $('#suhuburuk').val(suhuBuruk());
                $('#suhusangatburuk').val(suhuSangatBuruk());

                $('#tdsbaik').val(tdsBaik());
                $('#tdssedang').val(tdsSedang());
                $('#tdsburuk').val(tdsBuruk());
                $('#tdssangatburuk').val(tdsSangatBuruk());

                $('#dosbaik').val(doBaik());
                $('#dossedang').val(doSedang());
                $('#dosburuk').val(doBuruk());
                $('#dossangatburuk').val(doSangatBuruk());

                //untuk tampilan saja
                var cek = gradeTampilan();
                $('#cek').html(cek);
                var kohaku = gradeKohaku();
                $('#kohaku').html(kohaku);
                var sowasanke = gradeSowaSanke();
                $('#sowa').html(sowasanke);
                $('#sanke').html(sowasanke);
                var shiro = gradeShiro();
                $('#shiro').html(shiro);
                var oganyamabuki = gradeOganYamabuki();
                $('#ogan').html(oganyamabuki);
                $('#yamabuki').html(oganyamabuki);
            
            /**
            *  mencari nilai minimum dari tiga variable
            *  @param x
            *  @param y
            *  @param z
            *  @return nilai minimum
            */
            function findMin(x, y, z){
                if(x <= y && x <= z){
                    return x;
                }else if(y <= x && y <= z){
                    return y;
                }else{
                    return z;
                }
            }

            //==================== SUHU ====================//

            /**
             *  mencari nilai keanggotaan himpunan suhu baik
             *  @return nilai keanggotaan di himpunan suhu baik
             */
            function suhuBaik(){
                if(suhu >= 25 && suhu <= 26){
                    return 1;
                }else if(suhu >= 22.5 && suhu <= 25){
                    return (suhu - 22.5) / (25 - 22.5);
                }else if(suhu >= 26 && suhu <= 27){
                    return (27 - suhu) / (27 - 26);
                }else{
                    return 0;
                }
            }
            
            /**
             *  mencari nilai keanggotaan himpunan suhu sedang
             *  @return nilai keanggotaan di himpunan suhu sedang
             */
            function suhuSedang(){
                if(suhu >= 27 && suhu <= 28 || suhu >= 20 && suhu <= 25){
                    return 1;
                }else if(suhu >= 17.5 && suhu <= 20){
                    return (suhu - 17.5) / (20 - 17.5);
                }else if(suhu >= 22.5 && suhu <= 25){
                    return (25 - suhu) / (25 - 22.5);
                }else if(suhu >= 26 && suhu <= 27){
                    return (suhu - 26) / (27 - 26);
                }else if(suhu >= 28 && suhu <= 29){
                    return (29 - suhu) / (29 - 28);
                }else{
                    return 0;
                }
            }
            
            /**
             *  mencari nilai keanggotaan himpunan suhu buruk
             *  @return nilai keanggotaan di himpunan suhu buruk
             */
            function suhuBuruk(){
                if(suhu >= 15 && suhu <= 17.5 || suhu >= 29 && suhu <=30){
                    return 1;
                }else if(suhu >= 28 && suhu <= 29){
                    return (suhu - 28) / (29 - 28);
                }else if(suhu >= 30 && suhu <= 31){
                    return (31 - suhu) / (31 - 30);
                }else if(suhu >= 17.5 && suhu <= 20){
                    return (20 - suhu) / (20 - 17.5);
                }else if(suhu >= 12.5 && suhu <= 15){
                    return (suhu - 12.5) / (15 - 12.5);
                }else{
                    return 0;
                }
            }
            
            /**
             *  mencari nilai keanggotaan himpunan suhu sangat buruk
             *  @return nilai keanggotaan di himpunan suhu sangat buruk
             */
            function suhuSangatBuruk(){
                if(suhu >= 31 || suhu <= 12.5){
                    return 1;
                }else if(suhu >= 30 && suhu <= 31){
                    return (31 - suhu) / (31 - 30);
                }else if(suhu >= 12.5 && suhu <= 15){
                    return (suhu - 12.5) / (15 - 12.5);
                }else{
                    return 0;
                }
            }

            //==================== TDS ====================//

            /**
             *  mencari nilai keanggotaan himpunan TDS Baik
             *  @return nilai keanggotaan di himpunan TDS Baik
             */
            function tdsBaik(){
                if(tds >= 250 && tds <= 300){
                    return 1;
                }else if(tds >= 125 && tds <= 250){
                    return (tds - 125) / (250 - 125);
                }else if(tds >= 300 && tds <= 325){
                    return (325 - tds) / (325 - 300);
                }else{
                    return 0;
                }
            }

            /**
             *  mencari nilai keanggotaan himpunan TDS Sedang
             *  @return nilai keanggotaan di himpunan TDS Sedang
             */
            function tdsSedang(){
                if(tds >= 325 && tds <= 350 || tds <= 125){
                    return 1;
                }else if(tds >= 125 && tds <= 250){
                    return (250 - tds) / (250 - 125);
                }else if(tds >= 300 && tds <= 325){
                    return (tds - 300) / (325 - 300);
                }else if(tds >= 350 && tds <= 400){
                    return (400 - tds) / (400 - 350);
                }else{
                    return 0;
                }
            }

            /**
             *  mencari nilai keanggotaan himpunan TDS Buruk
             *  @return nilai keanggotaan di himpunan TDS Buruk
             */
            function tdsBuruk(){
                if(tds >= 400 && tds <= 450){
                    return 1;
                }else if(tds >= 350 && tds <= 400){
                    return (tds - 350) / (400 - 350);
                }else if(tds >= 450 && tds <= 475){
                    return (475 - tds) / (475 - 450);
                }else{
                    return 0;
                }
            }

            /**
             *  mencari nilai keanggotaan himpunan TDS Sangat Buruk
             *  @return nilai keanggotaan di himpunan TDS Sangat Buruk
             */
            function tdsSangatBuruk(){
                if(tds >= 475){
                    return 1;
                }else if(tds >= 450 && tds <= 475){
                    return (tds - 450) / (475 - 450);
                }else{
                    return 0;
                }
            }
            
            //==================== d.o ====================//

            /**
            *  mencari nilai keanggotaan himpunan d.o Baik
            *  @return nilai keanggotaan di himpunan d.o Baik
            */
            function doBaik(){
                if(dos >= 7){
                    return 1;
                }else if(dos >= 6 && dos <= 7){
                    return (7 - dos) / (7 - 6);
                }else{
                    return 0;
                }
            }

            /**
            *  mencari nilai keanggotaan himpunan d.o Sedang
            *  @return nilai keanggotaan di himpunan d.o Sedang
            */
            function doSedang(){
                if(dos >= 5 && dos <= 6){
                    return 1;
                }else if(dos >= 6 && dos <= 7){
                    return (7 - dos) / (7 - 6);
                }else if(dos >= 4 && dos <= 5){
                    return (dos - 4) / (5 - 4);
                }else{
                    return 0;
                }
            }

            /**
            *  mencari nilai keanggotaan himpunan d.o Buruk
            *  @return nilai keanggotaan di himpunan d.o Buruk
            */
            function doBuruk(){
                if(dos >= 3.5 && dos <= 4){
                    return 1;
                }else if(dos >= 4 && dos <= 5){
                    return (5 - dos) / (5 - 4);
                }else if(dos >= 3 && dos <= 3.5){
                    return (dos - 3) / (3.5 - 3);
                }else{
                    return 0;
                }
            }

            /**
            *  mencari nilai keanggotaan himpunan d.o Sangat Buruk
            *  @return nilai keanggotaan di himpunan d.o Sangat Buruk
            */
            function doSangatBuruk(){
                if(dos <= 3){
                    return 1;
                }else if(dos >= 3 && dos <= 3.5){
                    return (3.5 - dos) / (3.5 - 3);
                }else{
                    return 0;
                }
            }
        
            //==================== GRADE ====================//
            
            /**
             *  mencari harga di himpunan grade optimal (A)
             *  @param alfa
             *  @return harga
             */
            function gradeA(alfa){
                if(alfa > 0 && alfa < 1){
                    return (200 - (alfa * (200 - 100)));
                }else if(alfa == 1){
                    return 100;
                }else{
                    return 500;
                }
            }

            /**
             *  mencari harga di himpunan grade sedang (B)
             *  @param alfa
             *  @return harga
             */
            function gradeB(alfa){
                if(alfa > 0 && alfa < 1){
                    return (300 - (alfa * (300 - 200)));
                }else if(alfa == 1){
                    return 201;
                }else{
                    return 500;
                }
            }

            /**
             *  mencari harga di himpunan grade buruk (C)
             *  @param alfa
             *  @return harga
             */
            function gradeC(alfa){
                if(alfa > 0 && alfa < 1){
                    return (400 - (alfa * (400 - 300)));
                }else if(alfa == 1){
                    return 301;
                }else{
                    return 100;
                }
            }

            /**
             *  mencari harga di himpunan grade sangat buruk (D)
             *  @param alfa
             *  @return harga
             */
            function gradeD(alfa){
                if(alfa > 0 && alfa < 1){
                    return (500 - (alfa * (500 - 400)));
                }else if(alfa == 1){
                    return 500;
                }else{
                    return 100;
                }
            }
            
            /**
            *  mencari nilai z untuk semua aturan yang ada
            */
            function aturan(){
                //1. Jika suhu BAIK dan tds BAIK dan d.o BAIK maka grade A
                alfa[0]	= findMin(suhuBaik(),tdsBaik(),doBaik());
                z[0] = gradeA(alfa[0]);
                //2. Jika suhu BAIK dan tds BAIK dan d.o SEDANG maka grade B
                alfa[1]	= findMin(suhuBaik(),tdsBaik(),doSedang());
                z[1] = gradeB(alfa[1]);
                //3. Jika suhu BAIK dan tds BAIK dan d.o BURUK maka grade B
                alfa[2]	= findMin(suhuBaik(),tdsBaik(),doBuruk());
                z[2] = gradeB(alfa[2]);
                //4. Jika suhu BAIK dan tds BAIK dan d.o SANGAT BURUK maka grade C
                alfa[3]	= findMin(suhuBaik(),tdsBaik(),doSangatBuruk());
                z[3] = gradeC(alfa[3]);
                //5. Jika suhu BAIK dan tds SEDANG dan d.o BAIK maka grade A
                alfa[4]	= findMin(suhuBaik(),tdsSedang(),doBaik());
                z[4] = gradeA(alfa[4]);
                //6. Jika suhu BAIK dan tds SEDANG dan d.o SEDANG maka grade B
                alfa[5]	= findMin(suhuBaik(),tdsSedang(),doSedang());
                z[5] = gradeB(alfa[5]);
                //7. Jika suhu BAIK dan tds SEDANG dan d.o BURUK maka grade C
                alfa[6]	= findMin(suhuBaik(),tdsSedang(),doBuruk());
                z[6] = gradeC(alfa[6]);
                //8. Jika suhu BAIK dan tds SEDANG dan d.o SANGAT BURUK maka grade C
                alfa[7]	= findMin(suhuBaik(),tdsSedang(),doSangatBuruk());
                z[7] = gradeC(alfa[7]);
                //9. Jika suhu BAIK dan tds BURUK dan d.o BAIK maka grade C
                alfa[8]	= findMin(suhuBaik(),tdsBuruk(),doBaik());
                z[8] = gradeC(alfa[8]);
                //10. Jika suhu BAIK dan tds BURUK dan d.o SEDANG maka grade D
                alfa[9]	= findMin(suhuBaik(),tdsBuruk(),doSedang());
                z[9] = gradeD(alfa[9]);
                //11. Jika suhu BAIK dan tds BURUK dan d.o BURUK maka grade D
                alfa[10]	= findMin(suhuBaik(),tdsBuruk(),doBuruk());
                z[10] = gradeD(alfa[10]);
                //12. Jika suhu BAIK dan tds BURUK dan d.o SANGAT BURUK maka grade D
                alfa[11]	= findMin(suhuBaik(),tdsBuruk(),doSangatBuruk());
                z[11] = gradeD(alfa[11]);
                //13. Jika suhu BAIK dan tds SANGAT BURUK dan d.o BAIK maka grade C
                alfa[12]	= findMin(suhuBaik(),tdsSangatBuruk(),doBaik());
                z[12] = gradeC(alfa[12]);
                //14. Jika suhu BAIK dan tds SANGAT BURUK dan d.o SEDANG maka grade D
                alfa[13]	= findMin(suhuBaik(),tdsSangatBuruk(),doSedang());
                z[13] = gradeD(alfa[13]);
                //15. Jika suhu BAIK dan tds SANGAT BURUK dan d.o BURUK maka grade D
                alfa[14]	= findMin(suhuBaik(),tdsSangatBuruk(),doBuruk());
                z[14] = gradeD(alfa[14]);
                //16. Jika suhu BAIK dan tds SANGAT BURUK dan d.o SANGAT BURUK maka grade D
                alfa[15]	= findMin(suhuBaik(),tdsSangatBuruk(),doSangatBuruk());
                z[15] = gradeD(alfa[15]);
                //17. Jika suhu SEDANG dan tds BAIK dan d.o BAIK maka grade A
                alfa[16]	= findMin(suhuSedang(),tdsBaik(),doBaik());
                z[16] = gradeA(alfa[16]);
                //18. Jika suhu SEDANG dan tds BAIK dan d.o SEDANG maka grade B
                alfa[17]	= findMin(suhuSedang(),tdsBaik(),doSedang());
                z[17] = gradeB(alfa[17]);
                //19. Jika suhu SEDANG dan tds BAIK dan d.o BURUK maka grade B
                alfa[18]	= findMin(suhuSedang(),tdsBaik(),doBuruk());
                z[18] = gradeB(alfa[18]);
                //20. Jika suhu SEDANG dan tds BAIK dan d.o SANGAT BURUK maka grade C
                alfa[19]	= findMin(suhuSedang(),tdsBaik(),doSangatBuruk());
                z[19] = gradeC(alfa[19]);
                //21. Jika suhu SEDANG dan tds SEDANG dan d.o BAIK maka grade B
                alfa[20]	= findMin(suhuSedang(),tdsSedang(),doBaik());
                z[20] = gradeB(alfa[20]);
                //22. Jika suhu SEDANG dan tds SEDANG dan d.o SEDANG maka grade B
                alfa[21]	= findMin(suhuSedang(),tdsSedang(),doSedang());
                z[21] = gradeB(alfa[21]);
                //23. Jika suhu SEDANG dan tds SEDANG dan d.o BURUK maka grade C
                alfa[22]	= findMin(suhuSedang(),tdsSedang(),doBuruk());
                z[22] = gradeC(alfa[22]);
                //24. Jika suhu SEDANG dan tds SEDANG dan d.o SANGAT BURUK maka grade D
                alfa[23]	= findMin(suhuSedang(),tdsSedang(),doSangatBuruk());
                z[23] = gradeD(alfa[23]);
                //25. Jika suhu SEDANG dan tds BURUK dan d.o BAIK maka grade C
                alfa[24]	= findMin(suhuSedang(),tdsBuruk(),doBaik());
                z[24] = gradeC(alfa[24]);
                //26. Jika suhu SEDANG dan tds BURUK dan d.o SEDANG maka grade D
                alfa[25]	= findMin(suhuSedang(),tdsBuruk(),doSedang());
                z[25] = gradeD(alfa[25]);
                //27. Jika suhu SEDANG dan tds BURUK dan d.o BURUK maka grade D
                alfa[26]	= findMin(suhuSedang(),tdsBuruk(),doBuruk());
                z[26] = gradeD(alfa[26]);
                //28. Jika suhu SEDANG dan tds BURUK dan d.o SANGAT BURUK maka grade D
                alfa[27]	= findMin(suhuSedang(),tdsBuruk(),doSangatBuruk());
                z[27] = gradeD(alfa[27]);
                //29. Jika suhu SEDANG dan tds SANGAT BURUK dan d.o BAIK maka grade C
                alfa[28]	= findMin(suhuSedang(),tdsSangatBuruk(),doBaik());
                z[28] = gradeC(alfa[28]);
                //30. Jika suhu SEDANG dan tds SANGAT BURUK dan d.o SEDANG maka grade D
                alfa[29]	= findMin(suhuSedang(),tdsSangatBuruk(),doSedang());
                z[29] = gradeD(alfa[29]);
                //31.Jika suhu SEDANG dan tds SANGAT BURUK dan d.o BURUK maka grade D
                alfa[30]	= findMin(suhuSedang(),tdsSangatBuruk(),doBuruk());
                z[30] = gradeD(alfa[30]);
                //32. Jika suhu SEDANG dan tds SANGAT BURUK dan d.o SANGAT BURUK maka grade D
                alfa[31]	= findMin(suhuSedang(),tdsSangatBuruk(),doSangatBuruk());
                z[31] = gradeD(alfa[31]);
                //33. Jika suhu BURUK dan tds BAIK dan d.o BAIK maka grade B
                alfa[32]	= findMin(suhuBuruk(),tdsBaik(),doBaik());
                z[32] = gradeB(alfa[32]);
                //34. Jika suhu BURUK dan tds BAIK dan d.o SEDANG maka grade B
                alfa[33]	= findMin(suhuBuruk(),tdsBaik(),doSedang());
                z[33] = gradeB(alfa[33]);
                //35. Jika suhu BURUK dan tds BAIK dan d.o BURUK maka grade C
                alfa[34]	= findMin(suhuBuruk(),tdsBaik(),doBuruk());
                z[34] = gradeC(alfa[34]);
                //36. Jika suhu BURUK dan tds BAIK dan d.o SANGAT BURUK maka grade D
                alfa[35]	= findMin(suhuBuruk(),tdsBaik(),doSangatBuruk());
                z[35] = gradeD(alfa[35]);
                //37. Jika suhu BURUK dan tds SEDANG dan d.o BAIK maka grade B
                alfa[36]	= findMin(suhuBuruk(),tdsSedang(),doBaik());
                z[36] = gradeB(alfa[36]);
                //38. Jika suhu BURUK dan tds SEDANG dan d.o SEDANG maka grade C
                alfa[37]	= findMin(suhuBuruk(),tdsSedang(),doSedang());
                z[37] = gradeC(alfa[37]);
                //39. Jika suhu BURUK dan tds SEDANG dan d.o BURUK maka grade D
                alfa[38]	= findMin(suhuBuruk(),tdsSedang(),doBuruk());
                z[38] = gradeD(alfa[38]);
                //40. Jika suhu BURUK dan tds SEDANG dan d.o SANGAT BURUK maka grade D
                alfa[39]	= findMin(suhuBuruk(),tdsSedang(),doSangatBuruk());
                z[39] = gradeD(alfa[39]);
                //41. Jika suhu BURUK dan tds BURUK dan d.o BAIK maka grade D
                alfa[40]	= findMin(suhuBuruk(),tdsBuruk(),doBaik());
                z[40] = gradeD(alfa[40]);
                //42. Jika suhu BURUK dan tds BURUK dan d.o SEDANG maka grade D
                alfa[41]	= findMin(suhuBuruk(),tdsBuruk(),doSedang());
                z[41] = gradeD(alfa[41]);
                //43. Jika suhu BURUK dan tds BURUK dan d.o BURUK maka grade D
                alfa[42]	= findMin(suhuBuruk(),tdsBuruk(),doBuruk());
                z[42] = gradeD(alfa[42]);
                //44. Jika suhu BURUK dan tds BURUK dan d.o SANGAT BURUK maka grade D
                alfa[43]	= findMin(suhuBuruk(),tdsBuruk(),doSangatBuruk());
                z[43] = gradeD(alfa[43]);
                //45. Jika suhu BURUK dan tds SANGAT BURUK dan d.o BAIK maka grade D
                alfa[44]	= findMin(suhuBuruk(),tdsSangatBuruk(),doBaik());
                z[44] = gradeD(alfa[44]);
                //46. Jika suhu BURUK dan tds SANGAT BURUK dan d.o SEDANG maka grade D
                alfa[45]	= findMin(suhuBuruk(),tdsSangatBuruk(),doSedang());
                z[45] = gradeD(alfa[45]);
                //47. Jika suhu BURUK dan tds SANGAT BURUK dan d.o BURUK maka grade D
                alfa[46]	= findMin(suhuBuruk(),tdsSangatBuruk(),doBuruk());
                z[46] = gradeD(alfa[46]);
                //48. Jika suhu BURUK dan tds SANGAT BURUK dan d.o SANGAT BURUK maka grade D
                alfa[47]	= findMin(suhuBuruk(),tdsSangatBuruk(),doSangatBuruk());
                z[47] = gradeD(alfa[47]);
                //49. Jika suhu SANGAT BURUK dan tds BAIK dan d.o BAIK maka grade B
                alfa[48]	= findMin(suhuSangatBuruk(),tdsBaik(),doBaik());
                z[48] = gradeB(alfa[48]);
                //50. Jika suhu SANGAT BURUK dan tds BAIK dan d.o SEDANG maka grade B
                alfa[49]	= findMin(suhuSangatBuruk(),tdsBaik(),doSedang());
                z[49] = gradeB(alfa[49]);
                //51. Jika suhu SANGAT BURUK dan tds BAIK dan d.o BURUK maka grade C
                alfa[50]	= findMin(suhuSangatBuruk(),tdsBaik(),doBuruk());
                z[50] = gradeC(alfa[50]);
                //52. Jika suhu SANGAT BURUK dan tds BAIK dan d.o SANGAT BURUK maka grade D
                alfa[51]	= findMin(suhuSangatBuruk(),tdsBaik(),doSangatBuruk());
                z[51] = gradeD(alfa[51]);
                //53. Jika suhu SANGAT BURUK dan tds SEDANG dan d.o BAIK maka grade B
                alfa[52]	= findMin(suhuSangatBuruk(),tdsSedang(),doBaik());
                z[52] = gradeB(alfa[52]);
                //54. Jika suhu SANGAT BURUK dan tds SEDANG dan d.o SEDANG maka grade C
                alfa[53]	= findMin(suhuBuruk(),tdsSedang(),doSedang());
                z[53] = gradeC(alfa[53]);
                //55. Jika suhu SANGAT BURUK dan tds SEDANG dan d.o BURUK maka grade D
                alfa[54]	= findMin(suhuSangatBuruk(),tdsSedang(),doBuruk());
                z[54] = gradeD(alfa[54]);
                //56. Jika suhu SANGAT BURUK dan tds SEDANG dan d.o SANGAT BURUK maka grade D
                alfa[55]	= findMin(suhuSangatBuruk(),tdsSedang(),doSangatBuruk());
                z[55] = gradeD(alfa[55]);
                //57. Jika suhu SANGAT BURUK dan tds BURUK dan d.o BAIK maka grade D
                alfa[56]	= findMin(suhuSangatBuruk(),tdsBuruk(),doBaik());
                z[56] = gradeD(alfa[56]);
                //58. Jika suhu SANGAT BURUK dan tds BURUK dan d.o SEDANG maka grade D
                alfa[57]	= findMin(suhuSangatBuruk(),tdsBuruk(),doSedang());
                z[57] = gradeD(alfa[57]);
                //59. Jika suhu SANGAT BURUK dan tds BURUK dan d.o BURUK maka grade D
                alfa[58]	= findMin(suhuSangatBuruk(),tdsBuruk(),doBuruk());
                z[58] = gradeD(alfa[58]);
                //60. Jika suhu SANGAT BURUK dan tds BURUK dan d.o SANGAT BURUK maka grade D
                alfa[59]	= findMin(suhuSangatBuruk(),tdsBuruk(),doSangatBuruk());
                z[59] = gradeD(alfa[59]);
                //61. Jika suhu SANGAT BURUK dan tds SANGAT BURUK dan d.o BAIK maka grade D
                alfa[60]	= findMin(suhuSangatBuruk(),tdsSangatBuruk(),doBaik());
                z[60] = gradeD(alfa[60]);
                //62. Jika suhu SANGAT BURUK dan tds SANGAT BURUK dan d.o SEDANG maka grade D
                alfa[61]	= findMin(suhuSangatBuruk(),tdsSangatBuruk(),doSedang());
                z[61] = gradeD(alfa[61]);
                //63. Jika suhu SANGAT BURUK dan tds SANGAT BURUK dan d.o BURUK maka grade D
                alfa[62]	= findMin(suhuSangatBuruk(),tdsSangatBuruk(),doBuruk());
                z[62] = gradeD(alfa[62]);
                //64. Jika suhu SANGAT BURUK dan tds SANGAT BURUK dan d.o SANGAT BURUK maka grade D
                alfa[63]	= findMin(suhuSangatBuruk(),tdsSangatBuruk(),doSangatBuruk());
                z[63] = gradeD(alfa[63]);
            }
            
            /**
            *  mencari nilai total z(defuzzyfikasi)
            *  @return nilai total z
            */
            function defuzzyfikasi(){
                var temp1 = 0;
                var temp2 = 0;
                var hasil = 0;

                for(i = 0; i < 64; i++){
                    temp1 = temp1 + alfa[i] * z[i];
                    temp2 = temp2 + alfa[i];
                }

                hasil = temp1 / temp2;
                return Math.round(hasil);
            }
            
            /**
            *  menghitung semua aturan dan menentukan harga
            *  @return harga
            */
            function nilaiHasil(){
                aturan();
                return defuzzyfikasi();
            }

            function gradeHasil(){
                if(nilaiHasil() <= 200){
                    return "Optimal (A)"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "Sedang (B)"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "Buruk (C)"
                }else{
                    return "Sangat Buruk (D)"
                }
            }

            function gradeTampilan(){
                if(nilaiHasil() <= 200){
                    return "<h2 class='bold text-success text-center'>Optimal (A)</h2>"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "<h2 class='bold text-primary text-center'>Sedang (B)</h2>"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "<h2 class='bold text-warning text-center'>Buruk (C)</h2>"
                }else{
                    return "<h2 class='bold text-danger text-center'>Sangat Buruk (D)</h2>"
                }
            }

            function gradeKohaku(){
                if(nilaiHasil() <= 201){
                    return "<p class='bold text-success'>Optimal (A)</p>"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "<p class='bold text-primary'>Sedang (B)</p>"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "<p class='bold text-warning'>Buruk (C)</p>"
                }else{
                    return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
                }
            }

            function gradeKoh(){
                if(nilaiHasil() <= 201){
                    return "Optimal (A)"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "Sedang (B)"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "Buruk (C)"
                }else{
                    return "Sangat Buruk (D)"
                }
            }

            function gradeSowaSanke(){
                if(nilaiHasil() <= 200){
                    return "<p class='bold text-success'>Optimal (A)</p>"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "<p class='bold text-primary'>Sedang (B)</p>"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "<p class='bold text-warning'>Buruk (C)</p>"
                }else{
                    return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
                }
            }

            function gradeSow(){
                if(nilaiHasil() <= 200){
                    return "Optimal (A)"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "Sedang (B)"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "Buruk (C)"
                }else{
                    return "Sangat Buruk (D)"
                }
            }

            function gradeShiro(){
                if(nilaiHasil() <= 232){
                    return "<p class='bold text-success'>Optimal (A)</p>"
                }else if(nilaiHasil() >= 233 && nilaiHasil() <= 350){
                    return "<p class='bold text-primary'>Sedang (B)</p>"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 440){
                    return "<p class='bold text-warning'>Buruk (C)</p>"
                }else{
                    return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
                }
            }

            function gradeShi(){
                if(nilaiHasil() <= 232){
                    return "Optimal (A)"
                }else if(nilaiHasil() >= 233 && nilaiHasil() <= 350){
                    return "Sedang (B)"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 440){
                    return "Buruk (C)"
                }else{
                    return "Sangat Buruk (D)"
                }
            }

            function gradeOganYamabuki(){
                if(nilaiHasil() <= 201){
                    return "<p class='bold text-success'>Optimal (A)</p>"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "<p class='bold text-primary'>Sedang (B)</p>"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "<p class='bold text-warning'>Buruk (C)</p>"
                }else{
                    return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
                }
            }

            function gradeOga(){
                if(nilaiHasil() <= 201){
                    return "Optimal (A)"
                }else if(nilaiHasil() >= 200 && nilaiHasil() <= 300){
                    return "Sedang (B)"
                }else if(nilaiHasil() >= 300 && nilaiHasil() <= 400){
                    return "Buruk (C)"
                }else{
                    return "Sangat Buruk (D)"
                }
            }

            });
        });
    </script> 
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("includes/navbar.php") ?>
            <?php $this->load->view("includes/sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Uji Kualitas Air</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Uji Kualitas Air</li>
                        </ol>
                        <div class="row">
                            <fieldset> 
                                <!-- form1 -->
                                <form>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-4 text-center">
                                            <label class="control-label text-center" for="suhu">Suhu</label>
                                            <div class="input-group text-right">
                                                <input id="suhu" name="suhu" type="number" placeholder="Suhu" class="form-control input-md" require>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">°C</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4 text-center">
                                            <label class="control-label text-center" for="tds">TDS</label>
                                            <div class="input-group text-right">
                                                <input id="tds" name="tds" type="number" placeholder="tds" class="form-control input-md" require>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">ppm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4 text-center">
                                            <label class="control-label text-center" for="dos">d.o</label>
                                            <div class="input-group text-right">
                                                <input id="dos" name="dos" type="number" placeholder="dos" class="form-control input-md" require>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">ppm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center mb-4 mt-4">
                                    <button type="submit" id="proses" class="btn btn-primary proses">PROSES</button>
                                </div>
                                <!-- form2 -->
                                <form action="" methode="post">
                                    <div class="row text-center mt-5">
                                        <h2 style="display: inline">Hasil Uji Kualitas Air : </h2>
                                        <input type="text" name="score" id="score" class="score" style="font-size:180%; border:none; text-align:center;"/>                                    
                                        <input type="text" name="hasil" id="hasil" class="hasil" style="font-size:180%; border:none; text-align:center;"/>                                    
                                    </div>
                                    <p class="mb-4" id="cek"></p>
                                    
                                    <div class="col-md-8 text-center" style="margin-left:auto;margin-right:auto">
                                        <table id="z-result" style="align: center">
                                            
                                        </table>  
                                    </div>
                                    <div class="col-md-8 text-center" style="margin-left:auto;margin-right:auto">
                                        <table>
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Parameter</th>
                                                    <th>Bagus</th>
                                                    <th>Sedang</th>
                                                    <th>Buruk</th>
                                                    <th>Sangat Buruk</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Suhu</td>
                                                    <td><input type="text" name="suhubaik" id="suhubaik" class="suhubaik" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="suhusedang" id="suhusedang" class="suhusedang" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="suhuburuk" id="suhuburuk" class="suhuburuk" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="suhusangatburuk" id="suhusangatburuk" class="suhusangatburuk" style=" border:none; text-align:center;"/></td>
                                                </tr>
                                                <tr>
                                                    <td>TDS</td>
                                                    <td><input type="text" name="tdsbaik" id="tdsbaik" class="tdsbaik" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="tdssedang" id="tdssedang" class="tdssedang" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="tdsburuk" id="tdsburuk" class="tdsburuk" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="tdssangatburuk" id="tdssangatburuk" class="tdssangatburuk" style=" border:none; text-align:center;"/></td>
                                                </tr>
                                                <tr>
                                                    <td>d.o</td>
                                                    <td><input type="text" name="dosbaik" id="dosbaik" class="dosbaik" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="dossedang" id="dossedang" class="dossedang" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="dosburuk" id="dosburuk" class="dosburuk" style=" border:none; text-align:center;"/></td>
                                                    <td><input type="text" name="dossangatburuk" id="dossangatburuk" class="dossangatburuk" style=" border:none; text-align:center;"/></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="col-md-8 text-center" style="margin-left:auto;margin-right:auto">
                                        <table class="table table-striped" id="dataTable" cellspacing="0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Jenis Ikan Koi</th>
                                                    <th>Kualitas Air Untuk Ikan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>Kohaku</p>
                                                        <input type="text" name="koh" id="koh" class="koh" style=" border:none; text-align:center;"/>
                                                    </td>
                                                    <td id="kohaku"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Sanke</p>
                                                        <input type="text" name="san" id="san" class="san" style=" border:none; text-align:center;"/>
                                                    </td>
                                                    <td id="sanke"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Sowa</p>
                                                        <input type="text" name="sow" id="sow" class="sow" style=" border:none; text-align:center;"/>
                                                    </td>
                                                    <td id="sowa"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Shiro</p>
                                                        <input type="text" name="shi" id="shi" class="shi" style=" border:none; text-align:center;"/>
                                                    </td>
                                                    <td id="shiro"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Ogan</p>
                                                        <input type="text" name="oga" id="oga" class="oga" style=" border:none; text-align:center;"/>
                                                    </td>
                                                    <td id="ogan"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Yamabuki</p>
                                                        <input type="text" name="yam" id="yam" class="yam" style=" border:none; text-align:center;"/>
                                                    </td>
                                                    <td id="yamabuki"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mb-4 mt-4">
                                    <button type="submit" id="simpan" class="btn btn-primary simpan">SIMPAN</button>
                                    </div>
                                </form>
                                </fieldset>
                            </div>
                        </div>
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Uji coba kualitas air</div>
                            </div>
                        </div>
                    </footer>
            </div>
        </div>
        <!-- JS MEMANGGIL JS YANG ADA DI includes/js.php -->
        <?php $this->load->view("includes/js.php") ?>
    </body>
</html>