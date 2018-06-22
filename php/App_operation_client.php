<?php
/*
 *
 * Copyright 2015 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

// php:generate protoc --proto_path=./../protos   --php_out=./   --grpc_out=./ --plugin=protoc-gen-grpc=./../../bins/opt/grpc_php_plugin ./../protos/helloworld.proto

require dirname(__FILE__).'/vendor/autoload.php';

@include_once dirname(__FILE__).'/App/Operation/ApplicationOperationServiceClient.php';
@include_once dirname(__FILE__).'/App/Operation/ApplicationStartInfo.php';
@include_once dirname(__FILE__).'/App/Operation/ApplicationShutdownInfo.php';
@include_once dirname(__FILE__).'/App/Operation/Result.php';
@include_once dirname(__FILE__).'/GPBMetadata/ApplicationOperation.php';

function greet()
{
    $client = new App\Operation\ApplicationOperationServiceClient('127.0.0.1:5000', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new App\Operation\ApplicationStartInfo();
    $request->setMobile('1316960145');
    $request->setWxID("ddd");
    $request->setToken("ddd");
    $request->setClientPlatform(10);
    $request->setIp('127.0.0.1');
    $request->setStartTime('766');

    list($reply, $status) = $client->appStart($request)->wait();
    $message = $reply->getResponseEntity();
    return $message;
}

//$name = !empty($argv[1]) ? $argv[1] : 'world';
print_r(greet());
