<link href='public/styles/video_widget.css' rel='stylesheet' />

<div class='Screen'></div>

<div class="Navigation">
    <img onClick="channel.getVidContent(channel.yt_prevPageToken)" src="public/images/left.png" />
    <img onClick="channel.getVidContent()" src='public/images/home.png' />
    <img onClick="channel.getVidContent(channel.yt_nextPageToken)" src="public/images/right.png" />
</div>

<script src='public/scripts/channel.js'></script>

<script>
const script = document.createElement("script")
    script.src = "https://apis.google.com/js/client.js"
    script.onload = () => {
      window.gapi.load('client', () => {
        channel.getVidContent()
      })
    }

    document.body.appendChild(script)
</script>