# JSON-Prettify
A simple web app to make a JSON string easier to read

JSON-Prettify inserts newlines and tabs (4 spaces, actually) as appropriate to make the json string easy to parse mentally.
Useful for when you have to work with JSON REST APIs

App live at: http://json-prettify.herokuapp.com/

# Features:
* Enter or paste a json string or upload a json file
* View prettified stringor download file

# Sample input:
`{"data":[{"type":"gif","id":"64zSh1uTE7xxm","slug":"cat-funny-64zSh1uTE7xxm","url":"http:\/\/giphy.com\/gifs\/cat-funny-64zSh1uTE7xxm","bitly_gif_url":"http:\/\/gph.is\/1sGq99P","bitly_url":"http:\/\/gph.is\/1sGq99P","embed_url":"http:\/\/giphy.com\/embed\/64zSh1uTE7xxm","username":"","source":"http:\/\/wifflegif.com","rating":"g","content_url":"","source_tld":"wifflegif.com","source_post_url":"http:\/\/wifflegif.com","is_indexable":0,"import_datetime":"2016-06-15 15:11:49","trending_datetime":"1970-01-01 00:00:00","images":{"fixed_height":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200.gif","width":"356","height":"200","size":"2251285","mp4":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200.mp4","mp4_size":"155782","webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200.webp","webp_size":"1053250"},"fixed_height_still":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200_s.gif","width":"356","height":"200"},"fixed_height_downsampled":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200_d.gif","width":"356","height":"200","size":"223111","webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200_d.webp","webp_size":"102944"},"fixed_width":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w.gif","width":"200","height":"113","size":"785703","mp4":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w.mp4","mp4_size":"68626","webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w.webp","webp_size":"438106"},"fixed_width_still":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w_s.gif","width":"200","height":"113"},"fixed_width_downsampled":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w_d.gif","width":"200","height":"113","size":"79208","webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w_d.webp","webp_size":"42520"},"fixed_height_small":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100.gif","width":"178","height":"100","size":"638133","mp4":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100.mp4","mp4_size":"64103","webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100.webp","webp_size":"372016"},"fixed_height_small_still":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100_s.gif","width":"178","height":"100"},"fixed_width_small":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w.gif","width":"100","height":"56","size":"227617","mp4":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w.mp4","mp4_size":"32032","webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w.webp","webp_size":"153452"},"fixed_width_small_still":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w_s.gif","width":"100","height":"56"},"downsized":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif","width":"320","height":"180","size":"1957423"},"downsized_still":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy_s.gif","width":"320","height":"180"},"downsized_large":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif","width":"320","height":"180","size":"1957423"},"downsized_medium":{"url":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif","width":"320","height":"180","size":"1957423"},"original":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif","width":"320","height":"180","size":"1957423","frames":"62","mp4":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.mp4","mp4_size":"289048","webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.webp","webp_size":"990738"},"original_still":{"url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy_s.gif","width":"320","height":"180"},"looping":{"mp4":"https:\/\/media.giphy.com\/media\/64zSh1uTE7xxm\/giphy-loop.mp4"}}}],"meta":{"status":200,"msg":"OK","response_id":"57ec79fc452f124887700ec5"},"pagination":{"total_count":5153,"count":1,"offset":0}}`

#Sample output:
```{
    "data":[{
        "type":"gif",
        "id":"64zSh1uTE7xxm",
        "slug":"cat-funny-64zSh1uTE7xxm",
        "url":"http:\/\/giphy.com\/gifs\/cat-funny-64zSh1uTE7xxm",
        "bitly_gif_url":"http:\/\/gph.is\/1sGq99P",
        "bitly_url":"http:\/\/gph.is\/1sGq99P",
        "embed_url":"http:\/\/giphy.com\/embed\/64zSh1uTE7xxm",
        "username":"",
        "source":"http:\/\/wifflegif.com",
        "rating":"g",
        "content_url":"",
        "source_tld":"wifflegif.com",
        "source_post_url":"http:\/\/wifflegif.com",
        "is_indexable":0,
        "import_datetime":"2016-06-15 15:11:49",
        "trending_datetime":"1970-01-01 00:00:00",
        "images":{
            "fixed_height":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200.gif",
                "width":"356",
                "height":"200",
                "size":"2251285",
                "mp4":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200.mp4",
                "mp4_size":"155782",
                "webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200.webp",
                "webp_size":"1053250"
                },
            "fixed_height_still":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200_s.gif",
                "width":"356",
                "height":"200"
                },
            "fixed_height_downsampled":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200_d.gif",
                "width":"356",
                "height":"200",
                "size":"223111",
                "webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200_d.webp",
                "webp_size":"102944"
                },
            "fixed_width":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w.gif",
                "width":"200",
                "height":"113",
                "size":"785703",
                "mp4":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w.mp4",
                "mp4_size":"68626",
                "webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w.webp",
                "webp_size":"438106"
                },
            "fixed_width_still":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w_s.gif",
                "width":"200",
                "height":"113"
                },
            "fixed_width_downsampled":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w_d.gif",
                "width":"200",
                "height":"113",
                "size":"79208",
                "webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/200w_d.webp",
                "webp_size":"42520"
                },
            "fixed_height_small":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100.gif",
                "width":"178",
                "height":"100",
                "size":"638133",
                "mp4":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100.mp4",
                "mp4_size":"64103",
                "webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100.webp",
                "webp_size":"372016"
                },
            "fixed_height_small_still":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100_s.gif",
                "width":"178",
                "height":"100"
                },
            "fixed_width_small":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w.gif",
                "width":"100",
                "height":"56",
                "size":"227617",
                "mp4":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w.mp4",
                "mp4_size":"32032",
                "webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w.webp",
                "webp_size":"153452"
                },
            "fixed_width_small_still":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/100w_s.gif",
                "width":"100",
                "height":"56"
                },
            "downsized":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif",
                "width":"320",
                "height":"180",
                "size":"1957423"
                },
            "downsized_still":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy_s.gif",
                "width":"320",
                "height":"180"
                },
            "downsized_large":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif",
                "width":"320",
                "height":"180",
                "size":"1957423"
                },
            "downsized_medium":{
                "url":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif",
                "width":"320",
                "height":"180",
                "size":"1957423"
                },
            "original":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.gif",
                "width":"320",
                "height":"180",
                "size":"1957423",
                "frames":"62",
                "mp4":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.mp4",
                "mp4_size":"289048",
                "webp":"http:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy.webp",
                "webp_size":"990738"
                },
            "original_still":{
                "url":"https:\/\/media0.giphy.com\/media\/64zSh1uTE7xxm\/giphy_s.gif",
                "width":"320",
                "height":"180"
                },
            "looping":{
                "mp4":"https:\/\/media.giphy.com\/media\/64zSh1uTE7xxm\/giphy-loop.mp4"
                }
            }
        }],
    "meta":{
        "status":200,
        "msg":"OK",
        "response_id":"57ec79fc452f124887700ec5"
        },
    "pagination":{
        "total_count":5153,
        "count":1,
        "offset":0
        }
    }
```
