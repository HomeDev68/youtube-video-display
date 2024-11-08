# Youtube Video Display

## Prerequisites

- Adobe Flex SDK 4.6 or later
- Apache Ant 1.9.6 or later
- A local server (e.g., Apache, Nginx, or PHP built-in server)

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/camwest/youtube-video-display.git
   cd youtube-video-display
   ```

2. Set up a local server to run the `proxy.php` file. For example, using PHP built-in server:
   ```sh
   php -S localhost:8000
   ```

## Usage

1. Open the `src/main.mxml` file in your preferred IDE or text editor.

2. Modify the `videoSource` TextInput value to the desired YouTube video URL:
   ```xml
   <mx:TextInput id="videoSource" text="http://www.youtube.com/watch?v=qk39NnHp3Yw" />
   ```

3. Run the application in your IDE or compile it using the Flex SDK:
   ```sh
   mxmlc src/main.mxml -output bin/main.swf
   ```

4. Open the compiled `main.swf` file in a web browser or Flash Player.

## Running the Application

1. Start the local server (if not already running):
   ```sh
   php -S localhost:8000
   ```

2. Access the application by opening the `main.swf` file in a web browser or Flash Player.
