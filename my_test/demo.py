#!C:\Users\user\AppData\Local\Programs\Python\Python311\python.exe

import cgi
import shutil
import dotenv
import os
#import requests
import datetime
import webbrowser
import glob

from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait
from webdriver_manager.chrome import ChromeDriverManager

import asyncio
import time
form=cgi.FieldStorage()


def getuser():
   u=form.getvalue("username")
   return u

def getpass():
   p=form.getvalue("password")
   return p

def healthID():
   h=form.getvalue("health")
   return h

def clinicID():
   c=form.getvalue("CID")
   return c

print('Content-type: text/html\n\n')

def extract_csv_data():
    #print("Hello 2")

    url = 'https://www.fitbit.com/settings/data/export'

    # Get URL
    driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))
    driver.get(url)

    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.XPATH, "//input[@type='email']")))
    username_input = driver.find_element(By.XPATH, "//input[@type='email']")
    password_input = driver.find_element(By.XPATH, "//input[@type='password']")
    submit = driver.find_element(
        By.XPATH, "//form[@id='loginForm']/div/button")

    # Entering details of the user in the input form

    username_input.send_keys(getuser())
    password_input.send_keys(getpass())

   # username_input.send_keys(os.environ.get("FITBIT_USERNAME"))
   # password_input.send_keys(os.environ.get("FITBIT_PASSWORD"))
    # Hit Enter to login
    submit.click()
    #print("part 2")
    # time.sleep(10)
    driver.implicitly_wait(10)
    # find element by link text
    try:
        # print(driver)
        #print("Trying to find element")
        # element = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'download-button')))

        # print(driver.find_element(By.XPATH, "//input[@type='radio' and @value='LAST_MONTH']"))
        time.sleep(5)
        radio_button = driver.find_element(By.XPATH, "//input[@type='radio' and @value='CURRENT_MONTH']")
        
        # radio_button = driver.find_element(By.XPATH, "//input[@type='radio' and @value='LAST_MONTH']")
        
        radio_button.click()
        
        # print("das")
        # time.sleep(5)
        # driver.find_element(By.CLASS_NAME, 'download-button').click()

        time.sleep(2)
        now = datetime.datetime.now()
        month = now.strftime("%m")
        year = now.strftime("%Y")
        day = now.strftime("%d")
        if radio_button.is_selected():
            download_button = driver.find_element(By.CLASS_NAME, "download-button")
            # print(download_button)
            
            download_button.click()
            
            time.sleep(10)
        
    except:
        print("Data Export not found")
    else:
        
        download_dir = os.path.join(os.path.expanduser("~"), "Downloads") # Change this to your desired download directory
        download_d="/Users/user/Downloads"
        
        fiel=glob.glob(download_d + "/*")
   
        filename = max(fiel , key=os.path.getctime)
        
        
        
       

        # Get file path
        #download_dir = os.path.join(os.path.expanduser("~"), "Downloads") # Change this to your desired download directory
       # file_path = os.path.join(download_dir, filename)

        # Destination folder where you want to move the downloaded file
        dest_folder = "/xampp/htdocs/my_test/CSV/" + clinicID()
        
        # Move the file to the destination folder
        shutil.move(filename, dest_folder)
        print("Please Close this window")
            
            # Rename file

        csv_dir = "/xampp/htdocs/my_test/CSV/" + clinicID()
        filename2 = max(glob.glob(csv_dir + "/*"), key=os.path.getctime)
        
        # get only the filename of the most recently downloaded file
        # latest_file_name = os.path.basename(latest_file_path)

        # print(latest_file_name)
        # file_path2 = os.path.join(dest_folder, latest_file_name)
        new_file_name = healthID()+ ".csv" # Change this to your desired file name
        os.rename(filename2, os.path.join(dest_folder, new_file_name))


        webbrowser.open('http://localhost/my_test/index.php')
        

    # hold page for 10 seconds

    # hold page for 10 seconds


if __name__ == "__main__":
   # dotenv.load_dotenv()
    extract_csv_data()
