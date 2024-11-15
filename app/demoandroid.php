<?php
// instructions.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Process Instructions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        .content {
            margin-bottom: 20px;
        }
        .code-block {
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 5px;
            font-family: monospace;
            position: relative;
            margin-bottom: 20px;
        }
        .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            font-size: 0.9em;
            cursor: pointer;
        }
        img {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Instructions for Coding Process</h1>
    <div class="content">
        <p>Follow these steps to set up and run your application with Docker Compose:</p>
        <ol>
            <li>Make sure Docker and Docker Compose are installed on your system.</li>
            <li>Create a <code>docker-compose.yml</code> file with the contents below.</li>
            <li>Run <code>docker-compose up</code> in your terminal to start the services.</li>
        </ol>
    </div>

    <h2>Download Android Image</h2>
    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
http://www.cis.syr.edu/~wedu/Android-7.1.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://demoandroid.pixelme.lol/Android.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
http://172.20.122.217:8000/Android.zip
        </pre>
    </div>

    <h1>Download SEED Ubuntu</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
http://www.cis.syr.edu/~wedu/SEEDUbuntu-16.04-32bit.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://demoandroid.pixelme.lol/SEEDUBUNTU.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
http://172.20.122.217:8000/SEEDUBUNTU.zip
        </pre>
    </div>

    <h1>Download Repacking apk</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://seedsecuritylabs.org/Labs_20.04/Mobile/Android_Repackaging/files/RepackagingLab.apk.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://demoandroid.pixelme.lol/RepackagingLab.apk.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
http://172.20.122.217:8000/RepackagingLab.apk.zip
        </pre>
    </div>

    <h1>Malicious Code</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://seedsecuritylabs.org/Labs_20.04/Mobile/Android_Repackaging/files/MaliciousCode.smali
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://demoandroid.pixelme.lol/MaliciousCode.smali
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
http://172.20.122.217:8000/MaliciousCode.smali
        </pre>
    </div>

    <h1>Malicious Code Location</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://seedsecuritylabs.org/Labs_20.04/Mobile/Android_Repackaging/files/MaliciousCode_Location.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
https://demoandroid.pixelme.lol/MaliciousCode_Location.zip
        </pre>
    </div>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
http://172.20.122.217:8000/MaliciousCode_Location.zip
        </pre>
    </div>

    <h2>Configure VM Network</h2>
    <div class="code-block">
        <img src="./pictures/configuration_net_1.png" alt="Network Configuration Step 1" width="500" height="400"> 
        <img src="./pictures/configuration_net_2.png" alt="Network Configuration Step 2" width="500" height="400"> 
    </div>

    <h2>Configure VM for Android</h2>
    <div class="code-block">
        <?php
        // List of Android VM configuration images
        for ($i = 1; $i <= 10; $i++) {
            echo '<img src="./pictures/configuration_' . $i . '.png" alt="Android VM Configuration Step ' . $i . '" width="500" height="400">' . "\n        ";
        }
        ?>
    </div>

    <h2>Configure VM for SEED (user: seed, password: dees)</h2>
    <div class="code-block">
        <?php
        // List of SEED VM configuration images
        for ($i = 1; $i <= 11; $i++) {
            echo '<img src="./pictures/configuration_seed_' . $i . '.png" alt="SEED VM Configuration Step ' . $i . '" width="500" height="400">' . "\n        ";
        }
        ?>
    </div>

    <h2>Start the machines</h2>
    <div class="code-block">
        <img src="./pictures/configuration_end_1.png" alt="Start Machines Step" width="500" height="400">
    </div>

    <h1>Reverse Engineering</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
apktool d [appname].apk
        </pre>
    </div>

    <h2>Unpack the apk</h2>
    <div class="code-block">
        <img src="./pictures/process_1.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_2.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_3.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_4.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_5.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_6.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_6_1.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_7.png" alt="Network Configuration Step 2" width="500" height="400"> 
        
    </div>

    <h1>Change Manifest</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
&lt;manifest...&gt;
    ...
    &lt;uses-permission android:name="android.permission.READ_CONTACTS" /&gt;
    &lt;uses-permission android:name="android.permission.WRITE_CONTACTS" /&gt;
    &lt;uses-permission android:name="android.permission.ACCESS_COARSE_LOCATION" /&gt;
    &lt;uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" /&gt;
    &lt;uses-permission android:name="android.permission.ACCESS_BACKGROUND_LOCATION" /&gt;
    &lt;uses-permission android:name="android.permission.INTERNET" /&gt;
    ....
    &lt;application&gt;
        .....
        .....
        &lt;receiver android:name="com.MaliciousCode" &gt;
            &lt;intent-filter&gt;
                &lt;action android:name="android.intent.action.TIME_SET" /&gt;
            &lt;/intent-filter&gt;
        &lt;/receiver&gt;
    &lt;/application&gt;
&lt;/manifest&gt;
        </pre>
        <img src="./pictures/process_8.png" alt="Change Manifest Step" width="500" height="400"> 
    </div>

    <h1>Repack</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
apktool b [application_folder]
        </pre>
        <img src="./pictures/process_9.png" alt="Repack Step" width="500" height="400"> 
    </div>

    <h1>Sign the file with password adminadmin</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
keytool -alias mykeyalias -genkey -v -keystore mykey.keystore
jarsigner -keystore mykey.keystore ./RepackagingLab/dist/RepackagingLab.apk mykeyalias
        </pre>
        <img src="./pictures/process_10.png" alt="Sign APK Step" width="500" height="400"> 
    </div>

    <h2>Uninstall, Install and Testing</h2>
    <div class="code-block">
    
        <img src="./pictures/process_11.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_12.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_13.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_14.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_15.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_16.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_17.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_18.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_19.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_20.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_21.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_22.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_23.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_24.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_25.png" alt="Network Configuration Step 2" width="500" height="400"> 
        <img src="./pictures/process_26.png" alt="Network Configuration Step 2" width="500" height="400"> 
    </div>

    <h2>Log the testing</h2>
    <div class="code-block">
        <pre> adb logcat</pre>
    </div>

    <h1>Extra to track the Location</h1>

    <div class="code-block">
        <button class="copy-btn" onclick="copyToClipboard(this)">Copy</button>
        <pre>
&lt;manifest...&gt;
    ...
    &lt;uses-permission android:name="android.permission.READ_CONTACTS" /&gt;
    &lt;uses-permission android:name="android.permission.WRITE_CONTACTS" /&gt;
    &lt;uses-permission android:name="android.permission.ACCESS_COARSE_LOCATION" /&gt;
    &lt;uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" /&gt;
    &lt;uses-permission android:name="android.permission.ACCESS_BACKGROUND_LOCATION" /&gt;
    &lt;uses-permission android:name="android.permission.INTERNET" /&gt;
    ....
    &lt;application&gt;
        .....
        .....
        &lt;receiver android:name="com.mobiseed.repackaging.MaliciousCode" &gt;
            &lt;intent-filter&gt;
                &lt;action android:name="android.intent.action.TIME_SET" /&gt;
            &lt;/intent-filter&gt;
        &lt;/receiver&gt;
    &lt;/application&gt;
&lt;/manifest&gt;
        </pre>
    </div>
      
    <script>
        function copyToClipboard(button) {
            // Find the nearest .code-block parent
            const codeBlock = button.parentElement;
            const pre = codeBlock.querySelector('pre');
            if (!pre) {
                alert("No code to copy!");
                return;
            }

            // Create a temporary textarea to select and copy the text
            const textarea = document.createElement('textarea');
            textarea.value = pre.innerText.trim();
            document.body.appendChild(textarea);
            textarea.select();
            try {
                document.execCommand('copy');
                alert("Code copied to clipboard!");
            } catch (err) {
                alert("Failed to copy code.");
            }
            document.body.removeChild(textarea);
        }
    </script>
</body>
</html>
