function checkhuay() {

  var type = document.getElementById("huay-type").value;
  var huay = document.getElementById("huay").value;

  request("stock.php", (stockdata) => {

      console.log(stockdata)
      if (stockdata.length > 0) {

          stockdata.forEach((Stock, index) => {
            if(Stock.name == type){
              // console.log('lenght : ', huay.length)
              
              if (huay.length == 3){
                if(Stock.prize1 == huay){
                  // console.log("www")
                  $('#successTitle').append("ยินดีด้วย!!")
                  $('#successBody').append(
                    `
                    <p class="text-center">เย้!! คุณถูกรางวัล 3 ตัวบน</p>
                    `
                  )
                } else {
                  $('#successTitle').append("เสียใจด้วย!!")
                  $('#successBody').append(
                    `
                    <p class="text-center">คุณไม่ถูกรางวัล!!</p>
                    `
                  )
                }
              } else if (huay.length == 2){
                if(Stock.prize2[0] == huay){
                  // console.log('won!', Stock.prize2[0])
                  $('#successTitle').append("ยินดีด้วย!!")
                  $('#successBody').append(
                    `
                    <p class="text-center">เย้!! คุณถูกรางวัล 2 ตัวบน</p>
                    `
                  )
                } else if (Stock.prize2[1] == huay){
                  $('#successTitle').append("ยินดีด้วย!!")
                  $('#successBody').append(
                    `
                    <p class="text-center">เย้!! คุณถูกรางวัล 2 ตัวล่าง</p>
                    `
                  )
                } else {
                  $('#successTitle').append("เสียใจด้วย!!")
                  $('#successBody').append(
                    `
                    <p class="text-center">คุณไม่ถูกรางวัล!!</p>
                    `
                  )
                }
              } else {
                $('#successTitle').append("ข้อมูลผิดพลาด!!")
                  $('#successBody').append(
                    `
                    <p class="text-center">กรุณากรอกเลขหวย ให้ถูกต้อง!!</p>
                    `
                  )
              }

              $('#successModal').addClass('show');
              $('#successModal').modal().show();
            }

          });

      }

  })

}

function closePopup() {
  $('#successModal').removeClass('show');
  $('#successModal').modal().hide();
  $('#successTitle').html("");
  $('#successBody').html("");
  document.getElementById("huay").value = ""

}