<?php

echo "<div><b>Katas</b></div>";
echo "<div id='katas'></div>";

echo <<< END
<script>
    const data = { username: 'example'};
    fetch('http://localhost:8000/search', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => response.text())
    .then(data => {
      console.log('Success:', data);
      document.getElementById('katas').innerText = data
    })
</script>
END;