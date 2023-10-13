<!DOCTYPE html>
<html>
<head>
    <title>HTML และ JavaScript</title>
</head>
<body>
<div class="u-border-1 u-border-grey-75 u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-shape-rectangle u-list-item-1" style="margin-bottom: 10px" data-href="In_post.php">
    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
        <p class="u-text u-text-default u-text-2" style="font-size: 20px;">ชื่อ :</p>
        <p class="u-text u-text-default u-text-4" style="font-size: 20px;">วันที่สร้างโพส :</p>
    </div>
</div>

<div id="post-container">
    <!-- ข้อมูลจะถูกแสดงที่นี่ -->
</div>

<script>
    // โหลดข้อมูลจาก data.php โดยใช้ Fetch API
    fetch('test.php')
        .then(response => response.json())
        .then(data => {
            const postContainer = document.getElementById('post-container');
            data.forEach(post => {
                const postDiv = document.createElement('div');
                postDiv.className = 'u-border-1 u-border-grey-75 u-container-style u-list-item u-palette-5-light-3 u-repeater-item u-shape-rectangle u-list-item-1';
                postDiv.style.marginBottom = '10px';

                const containerLayout = document.createElement('div');
                containerLayout.className = 'u-container-layout u-similar-container u-valign-bottom u-container-layout-1';

                const titleParagraph = document.createElement('p');
                titleParagraph.className = 'u-text u-text-default u-text-2';
                titleParagraph.style.fontSize = '20px';
                titleParagraph.textContent = `หัวข้อ : ${post.title}`;

                const timeParagraph = document.createElement('p');
                timeParagraph.className = 'u-text u-text-default u-text-4';
                timeParagraph.style.fontSize = '20px';
                timeParagraph.textContent = `วันที่สร้างโพส : ${post.time_post}`;

                containerLayout.appendChild(titleParagraph);
                containerLayout.appendChild(timeParagraph);
                postDiv.appendChild(containerLayout);
                postContainer.appendChild(postDiv);
            });
        })
        .catch(error => console.error('เกิดข้อผิดพลาด:', error));
</script>
</body>
</html>
