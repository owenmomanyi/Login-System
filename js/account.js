const inputs = document.querySelectorAll('.edt');
const save = document.getElementById('save');

for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i];
    input.addEventListener('keyup', ()=>{
        if (input.defaultValue !== input.value.trim()) {    
            save.disabled = false;
        }else{
            save.disabled = true;
        }
    })
}

$("#edit").submit((e) => {
    e.preventDefault();

    var id = $("#id").val();
    var user = $("#username").val();
    var reg = $("#reg").val();
    var phone = $("#phone").val();
  
            $.post(
              "acEdit.php",
              {
                id: id,
                user: user,
                reg: reg,
                phone: phone

              },
              function (data) {
                if (data === "success") {
                    save.disabled = true;
                }else{
                    $("#error").html(data);
                    $("#error").addClass("error");
                }
              }
            );
    });
  