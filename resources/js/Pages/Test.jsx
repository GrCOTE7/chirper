import { Link, Head } from '@inertiajs/react';
import Layout from '@/Shared/Layout.jsx';

export default function Test({ a }) {
    return (
        <Layout>
            <Head title="Test" />
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header flex justify-between font-bold">
                                <div className="">Test</div>
                                <div className="text-xl">
                                    <Link href={route('create')}>+</Link></div>
                            </div>
                            <div className="card-body">
                                Welcome to our application !
                                <hr /> <b>{a}</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Layout>
    );
}
