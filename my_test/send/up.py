
import os
#import requests
import datetime
import webbrowser

from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait
from webdriver_manager.chrome import ChromeDriverManager

import asyncio
import time

def upload_file():
    # now = datetime.datetime.now()
    # month = now.strftime("%m")
    # year = now.strftime("%Y")
    # day = now.strftime("%d")
    time.sleep(5)
    DOWNLOADS_PATH = os.path.expanduser('~/Downloads')
    FILENAME = "fitbit_export_20230228.csv"    
    url = 'http://localhost/my%20test/upload.php'
    driver =  webdriver.Chrome(service=Service(ChromeDriverManager().install()))
    driver.get(url)
   
    # Find the file input element and send the file path to it
    print("in upload")
    file_input = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.NAME, 'myfile')))
    print("in upload2")
    password_input = driver.find_element(By.XPATH, "//input[@type='password']")
    print("in upload3")
    file_path = os.path.join(DOWNLOADS_PATH, FILENAME)
    print("in upload4")
    file_input.send_keys(file_path)
    print("in upload5")
    password_input.send_keys("9900")
    print("in stop")
    time.sleep(5)
    # Submit the form
    submit_button =driver.find_element(By.XPATH, '//input[@type="submit"]')
    submit_button.click()
    driver.implicitly_wait(10)
    driver.quit()


    if __name__ == "__main__":
        upload_file()