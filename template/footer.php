<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

<script>
var options = {
    strings: [
        'Banyak Hutang ???',
        'Anda Sedang Menggagur???',
        'Banyak Tanggungan?',
        'Cari Kerja aja tinggal tekan enter'
    ],
    typeSpeed: 40,
    startDelay: 0,
    backSpeed: 0,
    smartBackspace: true,
    shuffle: false,
    backDelay: 700,
    onComplete: (self) => {
        self.loop = true
    }
}

var typed = new Typed('#ketik', options);

</script>

</body>
</html>