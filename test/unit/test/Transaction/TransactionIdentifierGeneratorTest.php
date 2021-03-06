<?php

/**
 * Copyright 2017 American Express Travel Related Services Company, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
 * or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

declare(strict_types=1);

namespace AmericanExpressTest\HyperledgerFabricClient\Transaction;

use AmericanExpress\HyperledgerFabricClient\Nonce\NonceGeneratorInterface;
use AmericanExpress\HyperledgerFabricClient\ProtoFactory\SerializedIdentityFactory;
use AmericanExpress\HyperledgerFabricClient\Transaction\TransactionIdentifier;
use AmericanExpress\HyperledgerFabricClient\Transaction\TransactionIdentifierGenerator;
use AmericanExpress\HyperledgerFabricClient\Transaction\TransactionIdentifierGeneratorInterface;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;

/**
 * @covers \AmericanExpress\HyperledgerFabricClient\Transaction\TransactionIdentifierGenerator
 */
class TransactionIdentifierGeneratorTest extends TestCase
{
    /**
     * @var TransactionIdentifierGeneratorInterface
     */
    private $sut;

    protected function setUp()
    {
        $this->sut = new TransactionIdentifierGenerator(new class implements NonceGeneratorInterface {
            public function generateNonce(): string
            {
                return 'qur48f7e9';
            }
        });
    }

    public function testCreateTxId()
    {
        $files = vfsStream::setup('test');

        $certs = vfsStream::newFile('foo');
        $certs->setContent('FizBuz');
        $files->addChild($certs);

        $serializedIdentity = SerializedIdentityFactory::fromBytes('FooBar', 'FizBuz');

        $result = $this->sut->fromSerializedIdentity($serializedIdentity);

        self::assertInstanceOf(TransactionIdentifier::class, $result);
        self::assertInternalType('string', $result->getId());
        self::assertNotEmpty($result);
        self::assertSame('qur48f7e9', $result->getNonce());
    }
}
