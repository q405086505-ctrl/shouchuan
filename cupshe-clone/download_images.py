import os
import requests
from urllib.parse import urlparse
import time

# 禁用SSL警告
import urllib3
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)

# 图片URL列表
images = {
    # 头部图标
    "icons/flag-us.png": "https://media.cupshe.com/static.cupshe.com/static/964b4803-d62e-4a7a-ab76-c04cca3219e5/us.png",
    
    # 政策横幅图标
    "icons/policy-1.png": "https://media.cupshe.com/feed-img.cupshe.com/material/website/39f34c95-4558-4ffa-b8f4-d56c102a325b_pc1%20%E6%8B%B7%E8%B4%9D.png",
    "icons/policy-2.png": "https://media.cupshe.com/feed-img.cupshe.com/material/website/44b2f37b-217c-48b8-b97c-9e941db66c00_pc2.png",
    "icons/policy-3.png": "https://media.cupshe.com/feed-img.cupshe.com/material/website/e4c54b3f-55fb-44b1-9f0b-a4ccf60c322a_pc1.png",
    
    # 分类网格图片
    "categories/bikinis.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773737832059-2-oyqyjfmhp8.jpg",
    "categories/one-pieces.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773737857748-2-qsfl1yw0b3.jpg",
    "categories/cover-ups.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773738026562-2-2nkxqu24hk.jpg",
    "categories/rompers.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773737913091-2-bahen4ugvf.jpg",
    "categories/dresses.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773737878414-2-8znl3oir8r.jpg",
    "categories/tops.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773737992424-2-00x2hf2sxr.jpg",
    "categories/bottoms.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773738008996-2-5hebot1qhr.jpg",
    
    # 活动横幅图片
    "banners/family-getaways.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773738048868-5-ejlho3qeav.jpg",
    "banners/styles-travel.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773740783455-5-pn9kiap6fs.jpg",
    "banners/playful-practical.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773739087446-5-3fr72ofslx.jpg",
    "banners/vacation-mode.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773741137741-2-m6qqvi01ik.jpg",
    "banners/shoreline-standard.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773739087446-11-ywmb7fjryq.jpg",
    "banners/off-duty-orlando.jpg": "https://feed-img.cupshe.com/material/vc-upload-1773739364594-2-mkqb1z618d.jpg",
    
    # 品牌推广图片
    "brand/line.png": "https://cdn-shopify.cupshe.com/static/9bfaa20e-e713-4d4b-9f1b-ad7b2c20e48a/Frame%201261155274.png",
    "brand/values.jpg": "https://feed-img.cupshe.com/material/website/56ee6a51-493e-488c-acd3-c5f870e3b357_%E7%94%BB%E6%9D%BF%202.jpg",
    
    # App下载图片
    "app/phone.png": "https://feed-img.cupshe.com/material/website/35325e8b-6060-4dda-8212-15a2b10d9f57_PC-%E6%89%8B%E6%9C%BA%E4%B8%BB%E5%9B%BE.png",
    "app/check.png": "https://feed-img.cupshe.com/material/website/f357ce2f-10d5-4da4-b554-8a55edbac7dc_%E5%8B%BE%E5%8F%B7.png",
    "app/qr-code.jpg": "https://feed-img.cupshe.com/material/website/7e2aca2b-d6de-4fb1-8849-5ebe1e6a0406_%E4%BA%8C%E7%BB%B4%E7%A0%81.jpg",
    "app/google-play.png": "https://feed-img.cupshe.com/material/website/89c5e085-4c91-4cc2-b41a-d368a826bf6e_Badge.png",
    "app/app-store.png": "https://feed-img.cupshe.com/material/website/f0c731e7-9842-43a7-bb24-08a0aff03288_Badge-1.png",
    
    # 视频封面
    "banners/video-poster.jpg": "https://media.cupshe.com/cdn-review.cupshe.com/au/comment-service/20260318/A413E4232D914A579723102E85D3FBD9.jpg",
}

def download_images():
    base_dir = r"d:\小说\AI国内\cupshe-clone\images"
    
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        'Referer': 'https://www.cupshe.com/'
    }
    
    success_count = 0
    fail_count = 0
    
    for local_path, url in images.items():
        full_path = os.path.join(base_dir, local_path)
        os.makedirs(os.path.dirname(full_path), exist_ok=True)
        
        try:
            print(f"下载: {local_path}...")
            response = requests.get(url, headers=headers, verify=False, timeout=30)
            
            if response.status_code == 200:
                with open(full_path, 'wb') as f:
                    f.write(response.content)
                print(f"  ✓ 成功")
                success_count += 1
            else:
                print(f"  ✗ 失败 (状态码: {response.status_code})")
                fail_count += 1
        except Exception as e:
            print(f"  ✗ 错误: {str(e)}")
            fail_count += 1
        
        time.sleep(0.5)  # 避免请求过快
    
    print(f"\n下载完成! 成功: {success_count}, 失败: {fail_count}")

if __name__ == "__main__":
    download_images()
