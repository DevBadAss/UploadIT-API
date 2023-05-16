# UploadIT-API
The UploadIT API provides endpoints to upload files to a server, create and delete folders, and delete files. It simplifies the process of managing file operations on the server-side.

## Usage
To use the UploadIT API, send HTTP requests to the appropriate endpoints based on the desired action.

## Base URL
The base URL for accessing the API is http://your-domain.com/uploadit-api/api/. Replace your-domain.com with the actual domain where the API is hosted.

### API Actions

The following API actions are available:

-`file_upload`: Upload a file to the server.

-`file_delete`: Delete a file from the server.

-`create_dir`: Create a new directory on the server.

-`delete_dir`: Delete a directory from the server.

## API Endpoints

The API endpoints are accessed by sending POST requests to the respective URLs.

-`POST /uploadit-api/?action=file_upload`: Upload a file to the server.

-`POST /uploadit-api/?action=file_delete`: Delete a file from the server.

-`POST /uploadit-api/?action=create_dir`: Create a new directory on the server.

-`POST /uploadit-api/?action=delete_dir`: Delete a directory from the server.

## Request Headers

Make sure to set the following headers in your requests:

`Content-Type: application/json`
`Access-Control-Allow-Origin: *`
`Access-Control-Allow-Method: POST`

## Requests Examples

Upload a file

```php
  POST /uploadit-api/?action=file_upload

FormData:
- file: <file data>
- upload_directory: <upload directory>
- file_name: <file name>

```

Delete a file

```php
POST /uploadit-api/?action=file_delete

Body:
{
  "file_name": <file name>
}
```

Create a Directory

```bash
POST /uploadit-api/?action=create_dir

Body:
{
  "dir_name": <directory name>
}

```

Delete a Directory

```php
POST /uploadit-api/?action=delete_dir

Body:
{
  "dir_name": <directory name>
}
```

## Response Format
The API responses are in JSON format and contain the following properties:

status: The HTTP status code indicating the success or failure of the request.
responseText: A descriptive message providing additional information about the request.

## Security Considerations
Ensure that appropriate access controls and permissions are in place to protect the uploaded files and directories.
Sanitize and validate user inputs to prevent any malicious activities.
Implement appropriate authentication and authorization mechanisms if needed.

## Licence
This project is licensed under the [MIT](https://choosealicense.com/licenses/mit/) License.

## Authors

- [@DevBadAss](https://www.github.com/DevBadAss)
