window.addEventListener("load", function(){
    const boton=document.querySelector("#b1");
    boton.addEventListener("click",function(){
      saveQR();
    
    });
    });
    function saveQR() {
      console.log("asegurarnos que está llegando aquí");  
      // Genera el QR
        const qrcode = new QRCode('.qrcode', {
          size: 300,
          backgroundColor: '#ffffff',
          foregroundColor: '#000000',
        });
        qrcode.makeCode('https://techvblogs.com/blog/generate-qr-code-laravel-9');
    
        // Guarda el QR
        const qrcodeData = qrcode.toDataURL();
        localStorage.setItem('qrcode', qrcodeData);
      }
      const qrcodeData = localStorage.getItem('qrcode');
    
    if (qrcodeData) {
      const qrcodeBlob = new Blob([qrcodeData], {type: 'image/png'});
    
      // Descarga el QR
      const link = document.createElement('a');
      link.href = window.URL.createObjectURL(qrcodeBlob);
      link.download = 'qrcode.png';
      link.click();
    }
    