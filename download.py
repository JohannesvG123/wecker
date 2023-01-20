from pytube import YouTube

# ask for the link from user
#link = input("Enter the link of YouTube video you want to download:  ")
link = "https://www.youtube.com/watch?v=KRT-j_j-k4w"
yt = YouTube(link)

# Showing details
print("Title: ", yt.title)
print("Number of views: ", yt.views)
print("Length of video: ", yt.length)
print("Rating of video: ", yt.rating)
# Getting the highest resolution possible
ys = yt.streams.get_highest_resolution()

# Starting download
print("Downloading...")
video = yt.streams.filter(only_audio=True).first()
video.download("./dd", "teschd.mp3")
print("Download completed!!")

# TODO fehlermessage
