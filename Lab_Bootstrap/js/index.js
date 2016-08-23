      $(function(){
        var timer;    // 計時器變數
        
        // 為每張縮圖製作一個大圖的 img 標籤, 並加到 #all 區塊中
        $('.small').each(function() {
            var tag = $('<img></img>');    // 建立 img 元素
            tag.attr('src', 
                     $(this).attr('src')); // 複製縮圖的 src 屬性
            $('#all').append(tag);         // 附加元素
        });
        
        // 設定縮圖的按下事件處理器
        $('.small').click(function(){
            clearTimeout(timer);    // 清除計時器
            
            // 取消上張縮圖的選取圖框
            $('.selected').toggleClass('selected');
            
            // 將被按的縮圖加上選取圖框
            $(this).toggleClass('selected');
            
            // 計算要移動的位置
			var pos=$('.small').index(this)*-1024;
            $('#all').animate({'left':pos+'px'},'slow');
            
            // 索引值加 1 表示下一張縮圖
            var next = $('.small').index(this) + 1;
            
            // 若索引值超過範圍, 則設為0, 表示再重頭開始播放
            if(next == $('.small').length) next=0; 
            
            // 設定 3 秒後觸發下一張縮圖的 click 事件
            timer=setTimeout(function(){
              $('.small')[next].click()
             }, 2000);
        });
        
        //一開始先選第 1 張縮圖
        $('.small')[0].click()
      });
